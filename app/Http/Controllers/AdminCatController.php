<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\category;

class AdminCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin_cat_list() {
        $data = category::all();
        return view('admin.cat_list', ['categories'=>$data ]);
    }

    public function create_category(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|min:3|unique:categories',
            'status' => 'required',
        ]);

        $cat=new category;


        if($req->parent_id==null){
         $cat->parent_id=0;

        }
        else {
            $cat->parent_id=$req->parent_id;
        }
        $cat->name=$req->name;
        $cat->description=$req->description;
        $cat['slug'] = str_replace(' ', '-', $cat['name']);
        $cat->cover=$req->file('cover')->store('public');
        $cat->status=$req->status;

       // $req->validate([
       //      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       //  ]);
    
       //  $imageName = time().'.'.$req->image->extension();  
     
       //  $req->image->move(public_path('images'), $imageName);
       //  $cat->image=$imageName;
        $cat->save();
         return back()->with('message','You have successfully Add Category.'); 
       
    }


    public function admin_cat_add() {
        $data = category::all();
        return view('admin.cat_add', ['categories'=>$data ]);
    }

    public function admin_cat_edit() {
        return view('admin.cat_edit');
    }


    public function admin_sub_cat_list() {
            return view('admin.sub_cat_list');
        }

        public function admin_sub_cat_add() {
            return view('admin.sub_cat_add');
        }

        public function admin_sub_cat_edit() {
            return view('admin.sub_cat_edit');
        }

    public function admin_cat_child_list() {
            return view('admin.cat_child_list');
        }

        public function admin_cat_child_add() {
            return view('admin.cat_child_add');
        }

        public function admin_cat_child_edit() {
            return view('admin.cat_child_edit');
        }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
