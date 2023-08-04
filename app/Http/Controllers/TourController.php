<?php

namespace App\Http\Controllers;

use App\Models\Addons;
use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addons = Addons::orderBy('created_at', 'ASC')->get();
        $tour = Tour::orderBy('created_at', 'ASC')->get();
        return view('page.Tour', compact('tour','addons'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TourDashboard()
    {
        $data = Tour::get();
        return view('admin.tour.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.create');
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

        $tour = new Tour;

        $tour->name = $request->name;
        $tour->price = $request->price;
        $tour->price_show = $request->price_show;
        $tour->description = $request->desk;

        $tour->save();

        return redirect('tour/dashboard')->with('success', 'Data project has been created successfully');
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
        $data = Tour::where('id', $id)->first();
        return view('admin.tour.edit', compact('data'));
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
        $this->validate($request,[
            'name' => 'required',
            'desk' => 'required',
        ]);
        $tour = Tour::where('id', $id)->first();
        $tour->name = $request->name;
        $tour->price = $request->price;
        $tour->price_show = $request->price_show;
        $tour->description = $request->desk;
        $tour->save();

        return redirect('tour/dashboard')->with('success', 'Data Role has been update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tour::where('id', $id)->delete();
        return redirect()->route('tour.dashboard');
    }
}
