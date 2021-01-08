<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Services::join('sections', 'sections.service_id', '=', 'services.id')
        ->select('sections.id','service_title', 'age_range', 'title', 'details')
        ->paginate(10);
        return view('Admin.section.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.section.create');
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
            'service' => 'required',
            'age_range' => 'required',
            'title' => 'required',
            'details' => 'required',
        ]);

        $form_data = array(
            'service_id'=> $request->service,
            'age_range'=> $request->age_range,
            'title'=> $request->title,
            'details'=> $request->details,
        );

        Section::create($form_data);
        return redirect()->back()->with('success', 'Successfully section created .');
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
        $data = Section::find($id);
        return view('Admin.section.edit', compact('data'));
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
        $request->validate([
            'service' => 'required',
            'age_range' => 'required',
            'title' => 'required',
            'details' => 'required',
        ]);

        $form_data = array(
            'service_id'=> $request->service,
            'age_range'=> $request->age_range,
            'title'=> $request->title,
            'details'=> $request->details,
        );

        $record = Section::find($id);
        $record->update($form_data);
        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}
