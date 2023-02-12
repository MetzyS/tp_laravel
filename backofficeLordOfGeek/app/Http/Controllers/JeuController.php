<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Tag;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::orderBy('id', 'asc')->get();
        return view('jeux.index', ['jeux' => $jeux]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45',
            // un champ => une règle
        ])) {
            $titre = $request->input('titre');
            // puis écriture en BDD
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = Jeu::find($id);
        $categorie = $jeu->categorie;
        $tags = Tag::select('nom_tag', 'id')->join('pivot_tags', 'tag_id', '=', 'tags.id')->where('jeu_id', '=', $id)->get();
        // dd($tags);
        return view('jeux.show', compact('jeu', 'categorie', 'tags')); // equivalent des lignes en dessous
        // [
        //     'jeu' => $jeu,
        //     'categorie' => $categorie
        // ]
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeu = Jeu::find($id);
        $categories = Categorie::all();
        $tags = Tag::select('nom_tag', 'id')->join('pivot_tags', 'tag_id', '=', 'tags.id')->where('jeu_id', '=', $id)->get();
        return view('jeux.edit', [
            'jeu' => $jeu,
            'categorie' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45'
        ])) {
            $titre = $request->input('titre');  // input obligatoire
            $jeu = Jeu::find($id);              // récupère toutes les infos de la table jeu
            $jeu->titre = $titre;               // change le titre du jeu en lui assignant la valeur de la variable $titre (l'input)
            $categorie_id = $request->input('categorie');   // même principe
            $jeu->categorie_id = $categorie_id;
            $jeu->save();
            return redirect()->route('jeux.index');
        } else {
            return redirect()->back();
        }
    }

    public function attach(Request $request, $id_jeu)
    {
        $new_tag = $request->input('tag');
        $tag = Tag::firstOrCreate([
            'tag' => $new_tag,
        ]);
        $id_tag = $tag->id;
        $jeu = Jeu::find($id_jeu);
        $jeu->tags()->attach($id_tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }
}
