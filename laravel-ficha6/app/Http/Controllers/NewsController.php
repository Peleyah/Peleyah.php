<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(["index", "show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with("author")->orderBy("created_at","desc")->paginate(5);
        return view("news.index")->with(compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "title" => "required",
            "summary" => "required",
            "content" => "required",
        ]);
        $news = new News();
        $news->author_id = Auth::user()->id;
        $news->title = request()->post("title");
        $news->summary = request()->post("summary");
        $news->content = request()->post("content");
        $news->save();
        return redirect("/news/".$news->id)->with("success", __('fakenews.alert-created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view("news.show")->with("new", $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        if($news->author->id != Auth::user()->id) 
            abort(403);

        return view("news.edit")->with("new", $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        if($news->author->id != Auth::user()->id) 
            abort(403);
        
        request()->validate([
            "title" => "required",
            "summary" => "required",
            "content" => "required",
        ]);
        
        $news->author_id = Auth::user()->id;
        $news->title = request()->post("title");
        $news->summary = request()->post("summary");
        $news->content = request()->post("content");
        $news->save();
        return redirect("/news/".$news->id)->with("success", __('fakenews.alert-edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if($news->author->id != Auth::user()->id) 
            abort(403);
        
        News::destroy($news->id);
        return redirect("/news")->with("success", __('fakenews.alert-deleted'));;
    }
}
