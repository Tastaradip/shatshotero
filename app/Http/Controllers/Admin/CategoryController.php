<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct () 
    {
        $this->title = 'Categories';
        $this->route = 'admin.categories.';
        $this->view  = 'admin.category.';
    }

    public function index()
    {
        
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['categories'] = Category::orderBy('id','ASC')->get();
        $data['main_categories'] = Category::where('role','main')->get();
        $data['sub_categories'] = Category::where('role','sub')->get();
        return view($this->view.'index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['main_categories'] = Category::where('role','main')->get();
        $data['sub_categories'] = Category::where('role','sub')->get();
        return view($this->view.'create', $data);
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
                'name' => 'required | string | unique:categories,id',
                'role' => 'required'
            ]);
        $input = $request->only(['name', 'role', 'mainid', 'subid', 'status', 'featured']);
        $category = Category::create($input);  

        Toastr::success('Category added successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
                'name' => 'required | string | unique:categories,id',
                'role' => 'required'
            ]);
        $input = $request->only(['name', 'role', 'mainid', 'subid', 'status', 'featured']);
        $category->update($input);  

        Toastr::success('Category updated successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Toastr::success('Category deleted successfully :)','Success');
        return redirect()->back();
    }
}
