<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Toastr;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct () 
    {
        $this->title = 'Types';
        $this->route = 'admin.types.';
        $this->view  = 'admin.type.';
    }

    public function index()
    {
        
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['types'] = Type::orderBy('id','ASC')->get();
        return view($this->view.'index', $data);
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
        $request->validate([
                'title' => 'required | string | unique:categories,id',
            ]);
        $input = $request->only(['title', 'status']);
        $type = Type::create($input);  

        Toastr::success('Type added successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
                'title' => 'required | string | unique:categories,id',
            ]);
        $input = $request->only(['title', 'status']);
        $type->update($input);  

        Toastr::success('Type updated successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        Toastr::success('Type deleted successfully :)','Success');
        return redirect()->back();
    }
}
