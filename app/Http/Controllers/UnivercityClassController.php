<?php

namespace App\Http\Controllers;

use App\Models\Univercity_class;
use Illuminate\Http\Request;

class UnivercityClassController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:class-list|class-create|class-edit|class-delete', ['only' => ['index','show']]);
        $this->middleware('permission:class-create', ['only' => ['create','store']]);
        $this->middleware('permission:class-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:class-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $univercity_classes = Univercity_class::latest()->paginate(5);
        return view('univercity_classes.index',compact('univercity_classes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('univercity_classes.create');
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
            'name' => 'required',
        ]);

        Univercity_class::create($request->all());

        return redirect()->route('univercity_classes.index')
            ->with('success','Univercity_class created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Univercity_class  $class
     * @return \Illuminate\Http\Response
     */
    public function show(Univercity_class $univercity_class)
    {
        $class=$univercity_class;

        return view('univercity_classes.show',compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Univercity_class  $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Univercity_class $univercity_class)
    {
        $class=$univercity_class;
        return view('univercity_classes.edit',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Univercity_class  $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Univercity_class $univercity_class)
    {
        request()->validate([
            'name' => 'required',
        ]);

        $univercity_class->update($request->all());

        return redirect()->route('univercity_classes.index')
            ->with('success','Univercity_class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Univercity_class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy(Univercity_class $univercity_class)
    {
        $univercity_class->delete();

        return redirect()->route('univercity_classes.index')
            ->with('success','Univercity_class deleted successfully');
    }
}
