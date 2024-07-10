<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use App\Models\Staff;
use App\Mail\StaffCreated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $structure = auth()->user()->structure;
        $staffs = $structure->users()->where('role', 'waiter')->orWhere('role', 'manager')->get();
        return view('admin.staff.index', [
            'staffs' => $staffs,
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
            'role' => $request->input('role'),
            'active' => true,
            'password' => Hash::make($password),
        ]);

        if ($user->role == "waiter") {
            $staff = new Staff();
            $staff->user_id = $user->id;
            // $staff->place_id = $request->place;
            $staff->save();
        }

        if ($user) {
            Mail::to($request->email)->send(new StaffCreated($user, $password));
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
        $user->role = $request->input('role');
        $user->save();

        // $staff->place_id = $request->place;

        if ($user->save()) {
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
            Alert::error('Une erreur est survenue', 'Element introuvable',);
            return redirect()->back();
        }
    }

    private function staff_columns()
    {
        $columns = (object) [
            'name' => 'Nom',
            'email' => 'Email',
            'role_formatted' => 'Role',
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
                'title' => 'Nom',
                'field' => 'text'
            ],
            'email' => [
                'title' => 'Email',
                'field' => 'text'
            ],
            'role' => [
                'title' => 'Role',
                'field' => 'select',
                'options' => ['waiter' => 'Serveur', 'manager' => 'Gérant']
            ],
            // 'place' => [
            //     'title' => 'Table (Serveur uniquement)',
            //     'field' => 'model',
            //     'options' => Place::all()
            // ],
        ];
        return $fields;
    }
}
