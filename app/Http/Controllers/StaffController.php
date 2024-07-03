<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreStaffRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateStaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.staff.index', [
            'staffs' => Staff::all(),
            'my_actions' => $this->staff_actions(),
            'my_attributes' => $this->staff_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.create', [
            'my_fields' => $this->staff_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $request)
    {
        $password = substr(str_shuffle('0123456789'), 0, 6);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($password),
        ]);

        $staff = new Staff();
        $staff->user_id = $user->id;
        $staff->place_id = $request->place;

        if ($staff->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('staff');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return view('admin.staff.show', [
            'staff' => $staff,
            'my_fields' => $this->staff_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit', [
            'staff' => $staff,
            'my_fields' => $this->staff_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $user = $staff->user;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        $staff->place_id = $request->place;

        if ($staff->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('staff');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        try {
            $staff = $staff->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('staff');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function staff_columns()
    {
        $columns = (object) [
            'name' => 'Nom',
            'email' => 'Email',
            'place' => 'Table',
        ];
        return $columns;
    }

    private function staff_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function staff_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Dénomination',
                'field' => 'text'
            ],
            'email' => [
                'title' => 'Adresse',
                'field' => 'text'
            ],
            'place' => [
                'title' => 'Table',
                'field' => 'model',
                'options' => Place::all()
            ]
        ];
        return $fields;
    }
}
