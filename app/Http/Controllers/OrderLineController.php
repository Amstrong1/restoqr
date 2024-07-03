<?php

namespace App\Http\Controllers;

use App\Models\OrderLine;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreOrderLineRequest;
use App\Http\Requests\UpdateOrderLineRequest;

class OrderLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.orderLine.index', [
            'orderLines' => OrderLine::all(),
            'my_actions' => $this->orderLine_actions(),
            'my_attributes' => $this->orderLine_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orderLine.create', [
            'my_fields' => $this->orderLine_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderLineRequest $request)
    {
        $orderLine = new OrderLine();

        $fileName = time() . '.' . $request->logo->extension();
        $path = $request->file('logo')->storeAs('logos', $fileName, 'public');

        $orderLine->name = $request->name;
        $orderLine->adresse = $request->adresse;
        $orderLine->contact = $request->contact;
        $orderLine->email = $request->email;
        $orderLine->ifu = $request->ifu;
        $orderLine->rccm = $request->rccm;
        $orderLine->logo = $path;

        if ($orderLine->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('orderLine');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderLine $orderLine)
    {
        return view('admin.orderLine.show', [
            'orderLine' => $orderLine,
            'my_fields' => $this->orderLine_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderLine $orderLine)
    {
        return view('admin.orderLine.edit', [
            'orderLine' => $orderLine,
            'my_fields' => $this->orderLine_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderLineRequest $request, OrderLine $orderLine)
    {
        $orderLine = OrderLine::find($orderLine->id);

        if ($request->file !== null) {
            $fileName = time() . '.' . $request->logo->extension();
            $path = $request->file('logo')->storeAs('logos', $fileName, 'public');
        }

        $orderLine->name = $request->name;
        $orderLine->adresse = $request->adresse;
        $orderLine->contact = $request->contact;
        $orderLine->email = $request->email;
        $orderLine->ifu = $request->ifu;
        $orderLine->rccm = $request->rccm;
        if (isset($path)) {
            $orderLine->logo = $path;
        }
        
        if ($orderLine->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('orderLine');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderLine $orderLine)
    {
        try {
            $orderLine = $orderLine->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('orderLine');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function orderLine_columns()
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

    private function orderLine_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function orderLine_fields()
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
