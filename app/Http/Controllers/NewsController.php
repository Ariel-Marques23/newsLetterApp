<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);

        $new = News::create([
            'title' => $request->input('title'),
            'message' => $request->input('message'),
        ]);
        
        return response()->json($new, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = News::all();
        return  response()->json($news, 200);
    }

    public function update(Request $request, int $id)
    {
        $new = News::find($id);
        
        if (empty($new)) {
            throw new NotFoundHttpException('Nenhuma notícia com esse identificador foi encontrada.');
        }

        $new->update($request->only(['title', 'message']));

        return response()->json($new, 200);
    }

    public function delete(int $id)
    {
        News::destroy($id);
        return response()->noContent();
    }
}
