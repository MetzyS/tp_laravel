<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'asc')->get();
        return view('tags.index', ['tags' => $tags]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create', ['message' => "message d'erreur"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        $jeux = Jeu::select('titre', 'id')->join('pivot_tags', 'jeu_id', '=', 'jeux.id')->where('tag_id', '=', $id)->get();
        return view('tags.show', [
            'id_tag' => $id,
            'tag' => $tag,
            'jeux' => $jeux
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', [
            'id_tag' => $id,
            'tag' => $tag,
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
            'nom_tag' => 'required|string|max:45'
        ])) {
            $nom_tag = $request->input('nom_tag');
            $tag = Tag::find($id);
            $tag->nom_tag = $nom_tag;
            $tag->save();
            return redirect()->route('tags.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect()->route('tags.index');
    }
}
