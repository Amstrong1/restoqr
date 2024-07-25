<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structure = auth()->user()->structure;

        return view('admin.menu.index', [
            'menus' => $structure->menus()->get(),
            'my_actions' => $this->menu_actions(),
            'my_attributes' => $this->menu_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create', [
            'my_fields' => $this->menu_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();

        $menu->structure_id = Auth::user()->structure_id;
        $menu->name = $request->name;
        $menu->description = $request->description;

        if ($menu->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('menu');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('admin.menu.show', [
            'menu' => $menu,
            'my_fields' => $this->menu_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', [
            'menu' => $menu,
            'my_fields' => $this->menu_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu = Menu::find($menu->id);

        $menu->structure_id = Auth::user()->structure_id;
        $menu->name = $request->name;
        $menu->description = $request->description;
                
        if ($menu->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('menu');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try {
            $menu = $menu->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('menu');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function menu_columns()
    {
        $columns = (object) [
            'name' => 'Nom',
            'description' => 'Description',
        ];
        return $columns;
    }

    private function menu_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function menu_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Nom',
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
