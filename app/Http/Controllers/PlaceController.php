<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePlaceRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdatePlaceRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.place.index', [
            'places' => Place::all(),
            'my_actions' => $this->place_actions(),
            'my_attributes' => $this->place_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.place.create', [
            'my_fields' => $this->place_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaceRequest $request)
    {
        $place = new Place();

        $place->structure_id = Auth::user()->structure_id;
        $place->number = $request->number;
        $place->description = $request->description;

        if ($place->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('place');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        $qrCode = QrCode::size(200)->color(4, 14, 96)->generate("/site/resto/" . $place->id);

        return view('admin.place.show', [
            'place' => $place,
            'qrCode' => $qrCode,
            'my_fields' => $this->place_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        return view('admin.place.edit', [
            'place' => $place,
            'my_fields' => $this->place_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaceRequest $request, Place $place)
    {
        $place->number = $request->number;
        $place->description = $request->description;
        
        if ($place->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('place');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        try {
            $place = $place->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('place');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function place_columns()
    {
        $columns = (object) [
            'number' => 'Numero',
            'description' => 'Description',           
        ];
        return $columns;
    }

    private function place_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function place_fields()
    {
        $fields = [
            'number' => [
                'title' => 'Numero',
                'field' => 'text'
            ],
            'description' => [
                'title' => 'Description',
                'field' => 'textarea'
            ]
        ];
        return $fields;
    }
}
