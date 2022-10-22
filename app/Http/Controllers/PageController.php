<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
         $sermons = Sermon::all();
        return view('pages.index', compact('sermons'));
    }

    public function sermons(){

        $categories = Category::with('Sermons')->get();

        $sermons = Sermon::all();

        return view('pages.sermons', compact('categories','sermons'));
    }

    public function books(){
        $categories = Category::with('Books')->get();

        $books = Book::all();

        return view('pages.books', compact('categories','books'));
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function articles(){
        return "argaeraga";
    }

    public function mail(Request $request){

        // ini_set( 'display_errors', 1 );
        // error_reporting( E_ALL );

        $contactName = $request->contactName;
        $from = $request->contactEmail;
        $contactPhone = $request->contactPhone;
        $message = $request->message;




        $to = "recipient@domain.tld";

        $subject = $contactName.$contactPhone;



        dd($message);

        $headers = "From: $contactName" . $from;

        if (mail($to,$subject,$message,$headers)) {

            return redirect('/contact-us')->with('status', 'Message sent');
        } else {

            return redirect('/contact-us')->with('status', 'The email message was not sent.');

        };

    }


}
