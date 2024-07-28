<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class HomeController extends Controller
{
    /**
     * Retrieves and displays the homepage data for the authenticated user.
     *
     * @return \Illuminate\Contracts\View\View The view for the homepage.
     */
    public function __invoke()
    {
        $structure = auth()->user()->structure;
        $goal = $structure->goal()->first();
        $all_orders_count = $structure->orders()->count();
        $feedback_count = $structure->feedbacks()->count();
        $orderLinesAll = $structure->orderLines()->orderBy('id', 'desc')->simplePaginate(10);

        $products_count = $structure->orderLines()->groupBy('article_id')->count();
        $sales_count = $structure->orderLines()->sum('quantity');

        if ($goal !== null) {
            $menus = $structure->menus()->get();
            $orders = $structure->orders()->get();
            $orderLines = $structure->orderLines()->get();

            $articles_sold = $structure->articles()->get()->groupBy('menu_id')->map(function ($articles, $menu_id) use ($menus, $orderLines) {
                $menu = $menus->where('id', $menu_id)->first();
                $orderLines = $orderLines->whereIn('article_id', $articles->pluck('id'));
                $quantity = $orderLines->sum('quantity');
                return [
                    'menu_id' => $menu_id,
                    'menu_name' => optional($menu)->name,
                    'quantity' => $quantity
                ];
            });

            $qties = [];
            $categories = [];
            $colors = [];
            foreach ($articles_sold as $value) {
                $qties[] = $value['quantity'] * 100 / count($articles_sold);
                $categories[] = $value['menu_name'];
                $colors[] = getRandomColor();
            }

            $qties = json_encode($qties);
            $json_colors = json_encode($colors);
            $json_categories = json_encode($categories);

            if ($goal->frequency == 'Annuel') {
                $orders = $orders->filter(function ($value) {
                    return getYearFromDate($value->updated_at) == date('Y');
                });

                $revenue_progress = $orders->sum('total');

                $orders_count = $orders->count();
            } elseif ($goal->frequency == 'Mensuel') {
                $orders = $orders->filter(function ($value) {
                    return getMonthFromDate($value->updated_at) == date('m');
                });

                $revenue_progress = $orders->sum('total');

                $orders_count = $orders->count();
            } elseif ($goal->frequency == 'Quotidien') {
                $orders = $orders->filter(function ($value) {
                    return getDayFromDate($value->updated_at) == date('d');
                });

                $revenue_progress = $orders->sum('total');

                $orders_count = $orders->count();
            } elseif ($goal->frequency == 'Hebdomadaire') {
                $orders = $orders->filter(function ($value) {
                    return getWeekOfYear($value->updated_at) == date('W');
                });

                $revenue_progress = $orders->sum('total');

                $orders_count = $orders->count();
            }

            $orders_done = $orders->filter(function ($value) {
                return $value->status == 'Terminée';
            });
            $orders_done = $orders_done->count();
        } else {
            $orders_count = 0;
            $revenue_progress = 0;
            $orders_done = 0;
            $menus = null;
            $articles_sold = null;
            $qties = null;
            $categories = null;
            $colors = null;
            $json_categories = json_encode([]);
            $json_colors = json_encode(["#aaaaaa"]);
        }


        return view('admin.index', compact(
            'orders_count',
            'goal',
            'revenue_progress',
            'orders_done',
            'menus',
            'articles_sold',
            'qties',
            'categories',
            'json_categories',
            'colors',
            'json_colors',
            'all_orders_count',
            'feedback_count',
            'orderLinesAll',
            'products_count',
            'sales_count',
        ));
    }
}
