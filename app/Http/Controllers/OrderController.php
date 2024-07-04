<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Place;

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
        // return view('admin.order.create', [
        //     'my_fields' => $this->order_fields()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();

        $order->structure_id = $request->structure;
        $order->place_id = $request->place;
        $order->status = $request->status;

        if ($order->save()) {
            return 'success';
        } else {
            return 'error';
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
        $order->place_id = $request->place;
        $order->status = $request->status;

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
            Alert::error('Une erreur est survenue', 'Element introuvable',);
            return redirect()->back();
        }
    }

    private function order_columns()
    {
        $columns = (object) [
            'place_id' => 'Table',
            'status' => 'Statut',
            'total' => 'Total',
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
            'place' => [
                'title' => 'Table',
                'field' => 'model',
                'option' => Place::all()
            ],
            'status' => [
                'title' => 'Statut',
                'field' => 'select',
                'option' => [
                    'pending' => 'En attente',
                    'accepted' => 'Accepté', 
                    'rejected' => 'Rejeté', 
                    'canceled' => 'Annulé', 
                    'prepared' => 'Préparé', 
                    'delivered' => 'Livré'
                ]
            ],
        ];
        return $fields;
    }
}
