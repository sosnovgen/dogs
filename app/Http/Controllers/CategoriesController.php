<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Storage;
use App\Http\Requests;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.view', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $all = $request->all();
        Category::create($all);

        Session::flash('message', 'Категория сохранена!');
        return Redirect::to('/categories');

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete(); //Удалить строку из БД


        Session::flash('message', 'Категория удалена!');
        return Redirect::to('/categories');
    }








}
