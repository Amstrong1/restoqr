<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Article;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.article.index', [
            'articles' => Article::all(),
            'my_actions' => $this->article_actions(),
            'my_attributes' => $this->article_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create', [
            'my_fields' => $this->article_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article();

        $fileName = time() . '.' . $request->image->extension();
        $path = $request->file('image')->storeAs('articles', $fileName, 'public');

        $article->menu_id = $request->menu;
        $article->name = $request->name;
        $article->price = $request->price;
        $article->image = $request->image;
        $article->description = $request->description;
        $article->image = $path;

        if ($article->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('article');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article' => $article,
            'my_fields' => $this->article_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
            'my_fields' => $this->article_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        if ($request->image !== null) {
            $fileName = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('articles', $fileName, 'public');
        }

        $article->menu_id = $request->menu;
        $article->name = $request->name;
        $article->price = $request->price;
        $article->image = $request->image;
        $article->description = $request->description;
        
        if (isset($path)) {
            $article->image = $path;
        }
        
        if ($article->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('article');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            $article = $article->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('article');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }

    private function article_columns()
    {
        $columns = (object) [
            'image' => '',
            'menu' => 'Menu',
            'name' => 'Article',
            'price' => 'Prix',
        ];
        return $columns;
    }

    private function article_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function article_fields()
    {
        $fields = [
            'menu' => [
                'title' => 'Menu',
                'field' => 'model',
                'options' => Menu::all()
            ],
            'name' => [
                'title' => 'Nom',
                'field' => 'text'
            ],
            'price' => [
                'title' => 'Prix',
                'field' => 'number'
            ],
            'image' => [
                'title' => 'Image',
                'field' => 'file'
            ],
            'description' => [
                'title' => 'Description',
                'field' => 'textarea',
            ],
        ];
        return $fields;
    }
}
