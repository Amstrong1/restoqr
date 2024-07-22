<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $orders = $structure->orders()->get();
        $orderLines = $structure->orderLines()->get();

        
        $articles_sold = $structure->articles()->get()->map(function ($article) use ($orderLines) {
            $orderLines = $orderLines->where('article_id', $article->id);
            $quantity = $orderLines->sum('quantity');
            return [
                'article' => $article,
                'quantity' => $quantity
            ];
        });

        dd($articles_sold);


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

        $menus = $structure->menus()->get();

        return view('admin.index', compact('orders_count', 'goal', 'revenue_progress', 'orders_done', 'menus'));
    }
}
