<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Toastr;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct () 
    {
        $this->title = 'Sliders';
        $this->route = 'admin.sliders.';
        $this->view  = 'admin.slider.';
        $this->file_path = storage_path('app/public/sliders');
        $this->file_stored = '/public/sliders/';
        $this->file_path_view = \Request::root().'/storage/sliders/';
    }


    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['sliders'] = Slider::orderBy('id','ASC')->get();
        $data['file_path_view']       =  $this->file_path_view;
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

        $data['sliders'] = Slider::orderBy('id','ASC')->get(); 
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
                'title' => 'required',
                'image' => 'required',
            ]);
        $input = $request->only(['title', 'caption', 'status']);
        $slider = Slider::create($input);  

        if($request->hasFile('image'))
            {
                $uploadedFile = $request->file('image');
                $imageName = Str::slug($slider->title,'-').'_'.Carbon::now()->format('ddmmYhis').'.'.$uploadedFile->extension();
                if (!is_dir($this->file_path)) 
                {
                    mkdir($this->file_path, 0777);
                }
                $uploadedFile->storeAs($this->file_stored, $imageName);
                $url = $imageName;

                $imageUpload = new Image([
                    'url' => $url,
                    'type'=> '1',
                ]);

                $slider->images()->save($imageUpload);  
            }  

        Toastr::success('Slider added successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
                'title' => 'required',
            ]);
        $input = $request->only(['title', 'caption', 'status']);
        $slider->update($input);  

        Toastr::success('Slider updated successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(Storage::exists($this->file_stored.$slider->getImage())){
            Storage::delete($this->file_stored.$slider->getImage()) ;
        }
        $slider->delete();

        Toastr::success('Slider deleted successfully :)','Success');
        return redirect()->back();
    }
}
