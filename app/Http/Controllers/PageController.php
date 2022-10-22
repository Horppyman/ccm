<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Sermon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function sermons(){

        // $categories = Category::where('id', '>', 0)->with('sermons')->get();

        $categories = Category::with('Sermons')->get();

        // dd($categories[0]->Sermons->count());

        dd($categories);

        $sermons = Sermon::all();

        return view('pages.sermons', compact('categories','sermons'));
    }

    public function books(){
        $books = Book::all();

        return view('pages.books', compact('books'));
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
