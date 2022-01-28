<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest();
        return view('index',[
            'articles'=>$articles->paginate()
        ]);
    }
    function find(){
        $articles = Article::latest();
        $articles->where('title','like','%'.request('search').'%')
        ->orwhere('content','like','%'.request('search').'%');
        return view('index',[
            'articles'=>$articles->paginate()
        ]);
    }
    public function showAdd(){
        return view('/add-article');
    }
    public function store(Request $request){

        $articles = new Article;
        $articles->title= $request->input('title');
        $articles->content= $request->input('content');
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $fileName= uniqid().'.'. $extention;
        if (strpos($fileName,'php') || strpos($fileName,'js')){
            return redirect('/add-article')->with('message','sorry The extension must be jpg, png or jpeg');
        }
        $file->move('uploads/articles/',$fileName);
        $articles->image=$fileName;
        $articles->save();
        return redirect('/')->with('message','your article has been created');
    }

    public function destroy($id){
        $articles =Article::find($id);
        $articles->delete();
        return redirect('/')->with('message','your article has been deleted');
    }
}
