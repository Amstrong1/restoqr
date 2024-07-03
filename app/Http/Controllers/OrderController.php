<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::all(),
            'my_actions' => $this->order_actions(),
            'my_attributes' => $this->order_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.order.create', [
            'my_fields' => $this->order_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();

        $fileName = time() . '.' . $request->logo->extension();
        $path = $request->file('logo')->storeAs('logos', $fileName, 'public');

        $order->name = $request->name;
        $order->adresse = $request->adresse;
        $order->contact = $request->contact;
        $order->email = $request->email;
        $order->ifu = $request->ifu;
        $order->rccm = $request->rccm;
        $order->logo = $path;

        if ($order->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('order');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('admin.order.show', [
            'order' => $order,
            'my_fields' => $this->order_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.order.edit', [
            'order' => $order,
            'my_fields' => $this->order_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order = Order::find($order->id);

        if ($request->file !== null) {
            $fileName = time() . '.' . $request->logo->extension();
            $path = $request->file('logo')->storeAs('logos', $fileName, 'public');
        }

        $order->name = $request->name;
        $order->adresse = $request->adresse;
        $order->contact = $request->contact;
        $order->email = $request->email;
        $order->ifu = $request->ifu;
        $order->rccm = $request->rccm;
        if (isset($path)) {
            $order->logo = $path;
        }
        
        if ($order->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('order');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        try {
            $order = $order->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('order');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function order_columns()
    {
        $columns = (object) [
            'logo' => '',
            'name' => 'Dénomination',
            'contact' => 'Contact',
            'email' => 'Email',
            'adresse' => 'Adresse',
            'ifu' => 'IFU',
            'rccm' => 'RCCM',
        ];
        return $columns;
    }

    private function order_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function order_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Dénomination',
                'field' => 'text'
            ],
            'adresse' => [
                'title' => 'Adresse',
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
            'ifu' => [
                'title' => 'IFU',
                'field' => 'text'
            ],
            'rccm' => [
                'title' => 'RCCM',
                'field' => 'text'
            ],
            'logo' => [
                'title' => 'Logo',
                'field' => 'file'
            ],
        ];
        return $fields;
    }
}
