<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Sermon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $id = Session('loginId');

        $user = User::find($id);

        // dd($user);

        $categories = Category::all()->count();

        $sermons = Sermon::all()->count();

        $books = Book::all()->count();

        return(view('admin.home', compact('user','categories', 'sermons', 'books')));
    }
}
