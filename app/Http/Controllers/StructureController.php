<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Banner;
use App\Models\Social;
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
            'structures' => Structure::where('id', '!=', 1)->get(),
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
        if (auth()->user()->role == 'admin') {
            return view('admin.structure.edit', [
                'structure' => $structure,
                'banner' => Banner::where('structure_id', $structure->id)->first(),
                'social' => Social::where('structure_id', $structure->id)->first(),
                'goal' => Goal::where('structure_id', $structure->id)->first(),
                'my_fields' => $this->structure_fields(),
                'social_fields' => $this->social_fields(),
                'banner_fields' => $this->banner_fields(),
                'goal_fields' => $this->goal_fields(),
            ]);
        } elseif (auth()->user()->role == 'superadmin') {
            return view('admin.structure.edit', [
                'structure' => $structure,
                'my_fields' => $this->structure_fields(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStructureRequest $request, Structure $structure)
    {
        if (auth()->user()->role == "superadmin") {
            $structure->active = $request->active;
            $month = $request->licence_expiry;
            
            $date = new \DateTime();
            $new_date = $date->modify('+' . $month . ' month');
            $structure->licence_expiry = $new_date->format('Y-m-d H:i:s');

            if ($structure->save()) {
                Alert::toast('Opération éffectué avec succès', 'success');
                return redirect('structure');
            };
        } else {
            if ($request->logo !== null) {
                $fileName = time() . '.' . $request->logo->extension();
                $path = $request->file('logo')->storeAs('logos', $fileName, 'public');
            }
    
            $structure->name = $request->name;
            $structure->email = $request->email;
            $structure->tel = $request->tel;
            $structure->address = $request->address;
            $structure->slug = $request->slug;
    
            if (isset($fileName)) {
                $structure->logo = $path;
            }
    
            if ($structure->save()) {
                Alert::toast('Opération éffectué avec succès', 'success');
                return back();
            };
        }
        
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
            Alert::error('Une erreur est survenue', 'Element introuvable',);
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
            'active_formatted' => 'Statut',
        ];
        return $columns;
    }

    private function structure_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
        );

        if (auth()->user()->role == 'superadmin') {
            $actions->edit = 'Modifier';
            $actions->delete = "Supprimer";
        }

        return $actions;
    }

    private function structure_fields()
    {
        if (auth()->user()->role == 'admin') {
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
                    'field' => 'text'
                ],
                'slug' => [
                    'title' => 'Lien site internet',
                    'field' => 'url'
                ],
                'logo' => [
                    'title' => 'Logo',
                    'field' => 'file'
                ],
            ];
        } elseif (auth()->user()->role == 'superadmin') {
            $fields = [                
                'active' => [
                    'title' => 'Statut',
                    'field' => 'select',
                    'options' => [
                        '0' => 'Inactif',
                        '1' => 'Actif',
                    ]
                ],
                'licence_expiry' => [
                    'title' => 'Durée de la licence (mois)',
                    'field' => 'number'
                ],
            ];
        }

        return $fields;
    }

    private function banner_fields()
    {
        $fields = [
            'title' => [
                'title' => 'Titre',
                'field' => 'text'
            ],
            'image' => [
                'title' => 'Bannière',
                'field' => 'file'
            ],
            'description' => [
                'title' => 'Description',
                'field' => 'richtext',
                'colspan' => true
            ],
        ];
        return $fields;
    }

    private function social_fields()
    {
        $fields = [
            'facebook' => [
                'title' => 'Facebook',
                'field' => 'url'
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
            'youtube' => [
                'title' => 'Youtube',
                'field' => 'url'
            ],
        ];
        return $fields;
    }

    private function goal_fields()
    {
        $fields = [
            'frequency' => [
                'title' => 'Frequence',
                'field' => 'select',
                'options' => [
                    'Quotidien' => 'Quotidien',
                    'Hebdomadaire' => 'Hebdomadaire',
                    'Mensuel' => 'Mensuel',
                    'Annuel' => 'Annuel'
                ]
            ],
            'order' => [
                'title' => 'Estimation Nombres Commandes',
                'field' => 'number'
            ],
            'revenue' => [
                'title' => 'Estimation Chiffre d\'affaires',
                'field' => 'number'
            ]
        ];
        return $fields;
    }
}
