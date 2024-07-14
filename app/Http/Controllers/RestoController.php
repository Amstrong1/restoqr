<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Place;
use App\Models\Structure;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function get_menu_and_restaurant_info($tableId){

       // dd($tableId);

        $restaurantId = Place::where('id', $tableId)->first()->structure_id;
        
        $restaurant = Structure::where('id', $restaurantId)->with('banner','social')->first();

        $menus = Menu::where('structure_id', $restaurantId)->with('articles')->get();

        return response()->json(['menus' => $menus, 'restaurant' => $restaurant], 200);

    }

    public function get_table_order_info($tableId){

        $orders = Order::where('place_id', $tableId)
            ->where('status','!=','delivered')
            ->with(['orderLines' => function($query){
                $query->with('article');
            }])
            ->get();

        return response()->json(['orders' => $orders], 200);

    }

    public function order(Request $request, $tableId){

        //dd($request);   
        $restaurantId = Place::where('id', $tableId)->first()->structure_id;

        $order = new Order();
        $order->structure_id = $restaurantId;
        $order->place_id = $tableId;
        $order->status = 'pending';
        $order->total = $request->total;
        $order->description = $request->comment;
        $order->save();

        foreach($request->items as $item){
            //dd($request->id);
             $orderline = new OrderLine();
             $orderline->order_id = $order->id;
             $orderline->article_id = $item['id'];
             $orderline->quantity = $item['quantity'];
             //$orderline->structure_id = $restaurantId;
             $orderline->save();

            //  Mail::to($user->email)->send(new SellingMail());

         }       
 


    }

   
}
