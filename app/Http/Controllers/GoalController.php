<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GoalController extends Controller
{
        /**
     * Update a specific resource in the database.
     *
     * @param Request $request The incoming request containing the data to update
     * @throws Some_Exception_Class Description of exception (if any)
     * @return Some_Return_Value Description of the return value (if any)
     */
    public function update(Request $request)
    {
        Goal::updateOrCreate(
            ['structure_id' => auth()->user()->structure->id],
            [
                'frequency' => $request->frequency,
                'order' => $request->order,
                'revenue' => $request->revenue,
            ]
        );

        Alert::success('Success', 'Objectifs enregistrés avec succès!');
        return back();
    }
}
