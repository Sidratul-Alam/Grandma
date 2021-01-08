<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('Admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.services.create');
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
            'service_title' => 'required',
            'service_description' => 'required',
            'service_image' => 'required',
        ]);

        $file = $request->file('service_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('website/images/services', $filename);


        $form_data = array(
            'service_title'=> $request->service_title,
            'service_description'=> $request->service_description,
            'service_image'=> $filename,
            'is_upcoming'=> $request->is_upcoming,
        );

        Services::create($form_data);
        return redirect()->back()->with('success', 'Successfully service created .');
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
        $service = Services::find($id);
        return view('Admin.services.edit', compact('service'));
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
            'service_title' => 'required',
            'service_description' => 'required',
            'service_image' => 'required',
        ]);

        $file = $request->file('service_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('website/images/services', $filename);


        $form_data = array(
            'service_title'=> $request->service_title,
            'service_description'=> $request->service_description,
            'service_image'=> $filename,
            'is_upcoming'=> $request->is_upcoming,
        );

        $record = Services::find($id);
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
        Services::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}
