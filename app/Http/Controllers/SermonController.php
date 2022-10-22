<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::with('category')->get();

        // dd($sermons);
        return view('admin.sermons', compact('sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('admin.addsermon', Compact('categories'));
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
            'category_desc' => 'required',
            'preacher' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect('sermon/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        $sermon = new Sermon();
        $sermon->title =  $validated['title'];
        $sermon->category_id = $validated['category_id'];
        $sermon->description = $validated['category_desc'];
        $sermon->preacher = $validated['preacher'];

        if($request->file('sermon_file')){
            $file= $request->file('sermon_file');

            $filename= date('YmdHi')."_".$sermon->title.".".$request->sermon_file->extension();

            $file-> move(public_path('Audio'), $filename);

            $data['image']= $filename;
        } else {$filename = null;}

        $sermon->file = $filename;

        // dd($sermon);

        $sermon -> save();

        return redirect()->action(
            [SermonController::class, 'index']

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function show(Sermon $sermon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermon $sermon, $id)
    {

        $categories = Category::all();


        $sermon = Sermon::where('id', $id)->with('category')->get();

        // dd($sermon);

        return view('admin.editsermon', Compact('categories','sermon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sermon $sermon, $id)
    {

        $sermon = Sermon::find($id);

        // validateds all input...
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'category_desc' => 'required',
            'preacher' => 'required',

        ]);

        // checks id validator fails and returns to form ...
        if ($validator->fails()) {
            return redirect('sermon/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        if ($request->sermon_file != ''){
            $path = public_path().'/Image';

            //code for remove old file
            if($sermon->file != ''  && $sermon->file != null){
                 $file_old = $path."/".$sermon->file;
                 unlink($file_old);
            }

            $file= $request->file('sermon_file');

            $filename= date('YmdHi')."_".$sermon->title.".".$request->sermon_file->extension();

            $file-> move(public_path('Audio'), $filename);

        } else {
            $filename = $sermon->file;
        }



        $sermon->title =  $validated['title'];
        $sermon->category_id = $validated['category_id'];
        $sermon->description = $validated['category_desc'];
        $sermon->preacher = $validated['preacher'];
        $sermon->file = $filename;

        $sermon->save();


        return redirect()->action(
            [SermonController::class, 'index']

        );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermon $sermon, $id)
    {

        $sermon = Sermon::find($id);

        $sermon->delete();


        return redirect()->action(
            [SermonController::class, 'index']
        );

    }
}
