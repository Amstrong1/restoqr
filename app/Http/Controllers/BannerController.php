<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function update(Request $request)
    {
        $image = "";
        if ($request->image !== null) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('banners'), $image);

        }

        Banner::updateOrCreate(
            ['structure_id' => auth()->user()->structure->id],
            [
                'title' => $request->title,
                'image' => 'banners/' . $image,
                'description' => $request->description,
            ]
        );

        return back();
    }
}
