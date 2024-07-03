<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.invoice.index', [
            'invoices' => Invoice::all(),
            'my_actions' => $this->invoice_actions(),
            'my_attributes' => $this->invoice_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.invoice.create', [
            'my_fields' => $this->invoice_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        $invoice = new Invoice();

        $fileName = time() . '.' . $request->logo->extension();
        $path = $request->file('logo')->storeAs('logos', $fileName, 'public');

        $invoice->name = $request->name;
        $invoice->adresse = $request->adresse;
        $invoice->contact = $request->contact;
        $invoice->email = $request->email;
        $invoice->ifu = $request->ifu;
        $invoice->rccm = $request->rccm;
        $invoice->logo = $path;

        if ($invoice->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('invoice');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('admin.invoice.show', [
            'invoice' => $invoice,
            'my_fields' => $this->invoice_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('admin.invoice.edit', [
            'invoice' => $invoice,
            'my_fields' => $this->invoice_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice = Invoice::find($invoice->id);

        if ($request->file !== null) {
            $fileName = time() . '.' . $request->logo->extension();
            $path = $request->file('logo')->storeAs('logos', $fileName, 'public');
        }

        $invoice->name = $request->name;
        $invoice->adresse = $request->adresse;
        $invoice->contact = $request->contact;
        $invoice->email = $request->email;
        $invoice->ifu = $request->ifu;
        $invoice->rccm = $request->rccm;
        if (isset($path)) {
            $invoice->logo = $path;
        }
        
        if ($invoice->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('invoice');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        try {
            $invoice = $invoice->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('invoice');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function invoice_columns()
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

    private function invoice_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function invoice_fields()
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
