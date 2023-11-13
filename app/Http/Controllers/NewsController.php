<?php

namespace App\Http\Controllers;

use App\Kafka\Producer;
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

        $newsData = [
            'title' => $request->input('title'),
            'message' => $request->input('message'),
        ];

        if(!$request->is('api/*')) {
            $kafkaContent = json_encode($newsData);
    
            $kafkaProducer = new Producer();
            $kafkaProducer->produce($kafkaContent);
        }

        $new = News::create($newsData);
        
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
