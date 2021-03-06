<?php

namespace App\Http\Controllers;
use App\Fibre;
use App\Docs;
use Illuminate\Http\Request;

class FibreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fibres = Fibre::query()->where('user_id',auth()->user()->id)->paginate(10);
        return view('fibre_total')->with('fibres',$fibres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_fibre');
    }

    public function docs(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $document = $request->url->store('uploads','public');

        $docs = new Docs();
        $docs->user_id = $user_id;
        $docs->fibre_id = $id;
        $docs->title = $request->input('title');
        $docs->url = $document;
        $docs->save();
        return redirect()->back()->with('success', 'Document Uploaded Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fibre::create($request->all());
        return redirect()->back()->with('success', 'Opportunity Recorded Successfully'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fibre = Fibre::find($id);
        return view('fibre')->with('fibre',$fibre);
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
