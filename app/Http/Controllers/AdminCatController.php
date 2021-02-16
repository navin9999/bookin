<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.cat_list');
    }

    public function admin_cat_add() {
        return view('admin.cat_add');
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
