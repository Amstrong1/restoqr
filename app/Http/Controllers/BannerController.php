<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function update(Request $request)
    {
        $image = "";
        if ($request->image !== null) {
            $image = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('banners', $image, 'public');
        }

        Banner::updateOrCreate(
            ['structure_id' => auth()->user()->structure->id],
            [
                'title' => $request->title,
                'image' => $path,
                'description' => $request->description,
            ]
        );

        Alert::success('Success', 'Description ajoutée avec succès!');
        return back();
    }
}
