<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SocialController extends Controller
{
    public function update(Request $request)
    {
        Social::updateOrCreate(
            ['structure_id' => auth()->user()->structure->id],
            [
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'x' => $request->x,
                'tiktok' => $request->tiktok,
                'youtube' => $request->youtube,
            ]
        );

        Alert::success('Success', 'Lien ajouté avec succès!');
        return back();
    }
}
