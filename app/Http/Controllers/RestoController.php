<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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

   
}
