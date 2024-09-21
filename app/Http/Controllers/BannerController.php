<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function update(Request $request)
    {
        if ($request->image !== null) {
            $image = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('banners', $image, 'public');
        }

        Banner::updateOrCreate(
            ['structure_id' => Auth::user()->structure->id],
            [
                'title' => $request->title,
                'image' => $path ?? Auth::user()->structure->banner->image,
                'description' => $request->description,
            ]
        );

        Alert::success('Success', 'Description ajoutée avec succès!');
        return back();
    }
}
