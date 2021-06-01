<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = detail::all();
        return view('details.index',['details'=>$details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'id'=> 'required',
            'actName'=> 'required',
            'distance'=> 'required',
            'date'=> 'required',
            'latitude'=> 'required',
            'longitude'=> 'required',
        ]);

        $activity = new activity();
        $activity->id = request('id');
        $activity->actName = request('actName');
        $activity->save();

        $detail = new detail();
        $detail->distance = request('distance');
        $detail->date = request('date');
        $detail->latitude = request('latitude');
        $detail->longitude = request('longitude');
        $detail->activity_id = request('id');
//        $actData->user_id = Auth::user()->id;
        $detail->save();

        return redirect('details');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        return view('details.show',['detail'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        return view('details.edit', ['detail'=>$detail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        request()->validate([
            'distance'=> 'required',
            'date'=> 'required',
            'latitude'=> 'required',
            'longitude'=> 'required',
        ]);
        $detail->update($request->all());

        return redirect('details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $detail)
    {
        $detail->delete();
        return redirect('details');
    }
}
