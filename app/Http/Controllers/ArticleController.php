<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\ArticleModel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AccessController;
use Gate;

class ArticleController extends Controller
{
    public function index(){
        $articles=ArticleModel::all();
        return view('articles',['articles'=>$articles]);

    }
    public function show($id){
        $article=ArticleModel::find($id);

        $function_name = __FUNCTION__;
        $class_name = (new \ReflectionClass($this))->getShortName();
        AccessController::control($function_name, $class_name);

        return view('show',['article'=>$article]);
    }
    public function create(){
        $function_name = __FUNCTION__;
        $class_name = (new \ReflectionClass($this))->getShortName();

        AccessController::control($function_name, $class_name);



        return view('create');
    }
    public function store(Request $request){
        ArticleModel::create($request->all());
        return redirect('/articles');
    }

    public function edit($id){
        $article=ArticleModel::find($id);
        return view('edit',['article'=>$article]);
    }

    public function update(Request $request,$id){
        $article=ArticleModel::find($id);
        $article->title=$request->title;
        $article->text=$request->text;
        $article->save();
        return redirect('/articles');
    }
    public function delete($id){
        $article=ArticleModel::find($id);
        $article->delete();
        return redirect('/articles');


    }
}
