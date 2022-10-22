<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('category')->get();

        // dd($books[0]->category);
        return view('admin.books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('admin.addbook', Compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:sermons|max:255',
            'category_id' => 'required',
            'book_desc' => 'required',
            'author' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect('sermon/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        $book = new Book();
        $book->title =  $validated['title'];
        $book->category_id = $validated['category_id'];
        $book->description = $validated['book_desc'];
        $book->author = $validated['author'];

        if($request->file('book_file')){
            $file= $request->file('book_file');

            $filename= date('YmdHi')."_".$book->title.".".$request->book_file->extension();

            $file-> move(public_path('Books'), $filename);

            $data['book_file']= $filename;
        } else { $filename = null; };

        $book->file = $filename;

        // dd($book);

        $book -> save();

        return redirect()->action(
            [BookController::class, 'index']

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, $id)
    {
        $categories = Category::all();


        $book = Book::where('id', $id)->with('category')->get();

        // dd($book);

        return view('admin.editbook', Compact('categories','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book, $id)
    {
        $book = book::find($id);

        // validateds all input...
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'category_desc' => 'required',
            'author' => 'required',

        ]);

        // checks id validator fails and returns to form ...
        if ($validator->fails()) {
            return redirect('sermon/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        if ($request->book_file != ''){
            $path = public_path().'/Books';

            //code for remove old file
            if($book->file != ''  && $book->file != null){
                 $file_old = $path."/".$book->file;
                 unlink($file_old);
            }

            $file= $request->file('book_file');

            $filename= date('YmdHi')."_".$book->title.".".$request->book_file->extension();

            $file-> move(public_path('Books'), $filename);

        } else {
            $filename = $book->file;
        }



        $book->title =  $validated['title'];
        $book->category_id = $validated['category_id'];
        $book->description = $validated['category_desc'];
        $book->author = $validated['author'];
        $book->file = $filename;

        $book->save();


        return redirect()->action(
            [BookController::class, 'index']

        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, $id)
    {
        $book = Book::find($id);

        $book->delete();


        return redirect()->action(
            [BookController::class, 'index']
        );
    }
}
