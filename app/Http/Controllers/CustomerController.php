<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.customer.index', [
            'customers' => Customer::all(),
            'my_actions' => $this->customer_actions(),
            'my_attributes' => $this->customer_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.customer.create', [
        //     'my_fields' => $this->customer_fields()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->adresse = $request->email;
        $customer->contact = $request->tel;

        if ($customer->save()) {
            return 'success';
        } else {
            return 'error';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show', [
            'customer' => $customer,
            'my_fields' => $this->customer_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', [
            'customer' => $customer,
            'my_fields' => $this->customer_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->adresse = $request->email;
        $customer->contact = $request->tel;
        
        if ($customer->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('customer');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer = $customer->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('customer');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function customer_columns()
    {
        $columns = (object) [
            'name' => 'Nom',
            'email' => 'Email',
            'tel' => 'Contact',
        ];
        return $columns;
    }

    private function customer_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function customer_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Nom',
                'field' => 'text'
            ],
            'contact' => [
                'title' => 'Contact',
                'field' => 'tel'
            ],
            'email' => [
                'title' => 'Email',
                'field' => 'email'
            ],
        ];
        return $fields;
    }
}
