<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreStructureRequest;
use App\Http\Requests\UpdateStructureRequest;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.structure.index', [
            'structures' => Structure::all(),
            'my_actions' => $this->structure_actions(),
            'my_attributes' => $this->structure_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStructureRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Structure $structure)
    {
        return view('admin.structure.show', [
            'structure' => $structure,
            'my_fields' => $this->structure_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Structure $structure)
    {
        return view('admin.structure.edit', [
            'structure' => $structure,
            'my_fields' => $this->structure_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStructureRequest $request, Structure $structure)
    {
        // dd($request);
        if ($request->logo !== null) {
            $fileName = time() . '.' . $request->logo->extension();
            // $path = $request->file('logo')->storeAs('logos', $fileName, 'public');
            
            $request->logo->move(public_path('logos'), $fileName);
        }

        if ($request->banner !== null) {
            $fileName2 = time() . '.' . $request->banner->extension();
            // $path = $request->file('banner')->storeAs('logos', $fileName, 'public');
            $request->banner->move(public_path('banners'), $fileName2);

        }

        $structure->name = $request->name;
        $structure->email = $request->email;
        $structure->tel = $request->tel;
        $structure->address = $request->address;
        $structure->slug = $request->slug;
        $structure->facebook = $request->facebook;
        $structure->instagram = $request->instagram;
        $structure->tiktok = $request->tiktok;
        $structure->x = $request->x;
        if (isset($fileName)) {
            $structure->logo = 'logos/' . $fileName;
        }
        if (isset($fileName2)) {
            $structure->banner = 'banners/' . $fileName2;
        }
        
        if ($structure->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return back();
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structure $structure)
    {
        try {
            $structure = $structure->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('structure');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function structure_columns()
    {
        $columns = (object) [
            'logo' => '',
            'name' => 'Dénomination',
            'email' => 'Contact',
            'tel' => 'Email',
            'address' => 'Adresse',
        ];
        return $columns;
    }

    private function structure_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function structure_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Dénomination',
                'field' => 'text'
            ],
            'email' => [
                'title' => 'Email',
                'field' => 'text'
            ],
            'tel' => [
                'title' => 'Contact',
                'field' => 'tel'
            ],
            'address' => [
                'title' => 'Adresse',
                'field' => 'email'
            ],
            'slug' => [
                'title' => 'Lien site internet',
                'field' => 'url'
            ],
            'logo' => [
                'title' => 'Logo',
                'field' => 'file'
            ],
            'facebook' => [
                'title' => 'Facebook',
                'field' => 'url'
            ],
            'banner' => [
                'title' => 'Bannière',
                'field' => 'file'
            ],
            'instagram' => [
                'title' => 'Instagram',
                'field' => 'url'
            ],
            'x' => [
                'title' => 'X (Twitter)',
                'field' => 'url'
            ],
            'tiktok' => [
                'title' => 'Tiktok',
                'field' => 'url'
            ],
        ];
        return $fields;
    }
}
