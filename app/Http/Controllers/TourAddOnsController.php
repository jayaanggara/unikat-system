<?php

namespace App\Http\Controllers;

use App\Models\Addons;
use App\Service\myImage;
use Illuminate\Http\Request;

class TourAddOnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Addons::get();
        return view('admin.addons.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'price_show' => 'required',
            'desk' => 'required'
        ]);

        $addons = new Addons;

        $addons->name = $request->name;
        $addons->price = $request->price;
        $addons->price_show = $request->price_show;
        $addons->description = $request->desk;

        if($request->hasFile('image')){
            $image = new myImage;
            $addons->image =  $image->saveImage($request->image, $request->name,'add-ons');;
        }

        $addons->save();

        return redirect('tour/addons')->with('success', 'Data project has been created successfully');
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
        $data = Addons::where('id', $id)->first();
        return view('admin.addons.edit', compact('data'));
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
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'price_show' => 'required',
            'desk' => 'required'
        ]);

        $addons = Addons::where('id', $id)->first();

        $addons->name = $request->name;
        $addons->price = $request->price;
        $addons->price_show = $request->price_show;
        $addons->description = $request->desk;

        if($request->hasFile('image')){
            $image = new myImage;
            if($addons->image != ""){
                $image->deleteImage($addons->image);
            }
            $addons->image =  $image->saveImage($request->image, $request->name,'add-ons');;
        }

        $addons->save();

        return redirect('tour/addons')->with('success', 'Data project has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = new myImage;
        $addons = Addons::where('id', $id)->first();
        $addons->image =  $image->deleteImage($addons->image,'add-ons');

        $addons->delete();

        return redirect('tour/addons')->with('success', 'Data project has been created successfully');
    }
}
