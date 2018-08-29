<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Article;
use App\Group;
use App\Category;
use Validator;
use Session;

use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class FrontController extends Controller

{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        $n = 0; //Признак сортировки
        
        return view('site.page',[
            'categories' => $categories,
            'articles' => $articles,
            'n' => $n,
            'links' => $links,
        ]);

        /*$articles=Article::where('public','=',1)->get();
        return view('site.index',['articles'=>$articles]);*/
    }


    public function show($id)
    {
        
        /*$comments=Article::where('public','=',1)->find($id)->comments()->where('public','=','1')->get();; // выбираем все комментарии, который относятся к статье*/
        $group = Group::where('title', 'блог')->first();
        $posts=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> get();
        $articles=Article::find($id);
        return view('site.show',['articles'=>$articles], ['posts' => $posts]);
    }

    //-----------------------------------------------
    //Стартовая страница
    public function one()
    {
    $group = Group::where('title', 'блог')->first();
    $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> get();
       //$arts[] = $articles ->toarray();
       // return view('site.test',['arts'=>$arts]);
        return view('site.start', ['articles' => $articles]);
    }

    //-------------------------------------------------------------------
    //Галлерея
    public function gallery()
    {
        $group = Group::where('title', 'фото')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> get();
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.gallery', ['articles' => $articles]);
    }

    //-------------------------------------------------------------------
    //Щенки
    public function puppies()
    {
        $group = Group::where('title', 'щенки')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> get();
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.puppies', ['articles' => $articles]);



    }

    //-------------------------------------------------------------------
    //Контакты
    public function contact()
    {

        return view('site.contact');

    }

    //Сортировка по категории
    public function news()
    {
        $categories = Category::all(); //Все категории
        $group = Group::where('title','=','новинка');
        $id  = $group->first()-> id;

        $articles = Article::where('group_id','=',$id) -> paginate(12); //Выбрать все новинки*/
        $links = str_replace('/?', '?', $articles->render());
        $n = 0; //Признак сортировки по категориям

        return view('site.page',[
            'categories' => $categories,
            'articles' => $articles,
            'n' => $n,
            'links' => $links,
        ]);

    }
    //-------------------------------------------------------
    //Find in articles.
    public function search(Request $request)
    {
        $categories = Category::all();
        $query = $request -> search;
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')->paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        $n = 0; //Признак сортировки

        /*return view('site.page', copmpact('categories','query','articles','links', 'n'));*/
        return view('site.page',[
            'categories' => $categories,
            'articles' => $articles,
            'n' => $n,
            'links' => $links,
            'query' => $query,
        ]);
    }


}

