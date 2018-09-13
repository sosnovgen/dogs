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
use Embed;

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
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.gallery', [
            'articles' => $articles,
            'links' => $links,
            ]);
    }

    //-------------------------------------------------------------------
    //Щенки
    public function puppies()
    {
        $group = Group::where('title', 'щенки')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.puppies', [
            'articles' => $articles,
            'links' => $links,
        ]);

    }

    //-------------------------------------------------------------------
    //Видео
    public function video()
    {
        $group = Group::where('title', 'видео')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.video', [
            'articles' => $articles,
            'links' => $links,
        ]);

    }

    //-------------------------------------------------------------------
    //Служба спасения на воде
    public function ccb()
    {
        $group = Group::where('title', 'ссв')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.ccb', [
            'articles' => $articles,
            'links' => $links,
        ]);

    }

    //-------------------------------------------------------------------
    //О нас
    public function about()
    {
        $group = Group::where('title', 'о нас')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.about', [
            'articles' => $articles,
            'links' => $links,
        ]);

    }

    //-------------------------------------------------------------------
    //Контакты
    public function contact()
    {

        return view('site.contact');

    }

    //-------------------------------------------------------------------
    //Дипломы.
    public function diplom()
    {
        $group = Group::where('title', 'дипломы')->first();
        $articles=Article::where('group_id',$group->id) -> orderBy('id', 'desc')-> paginate(12);
        $links = str_replace('/?', '?', $articles->render());
        //$arts[] = $articles ->toarray();
        // return view('site.test',['arts'=>$arts]);
        return view('site.diplom', [
            'articles' => $articles,
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

