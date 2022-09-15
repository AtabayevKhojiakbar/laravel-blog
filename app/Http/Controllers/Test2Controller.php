<?php

namespace App\Http\Controllers;

use App\Models\Test2;
use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=Test2::all();
        return view('test2.index',[
            'all'=>$all
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test2=new Test2();
        $test2->title=$request->title;
        $test2->name=$request->text;
        $filename = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('images'), $filename);

        $test2->img=$filename;
        $test2->save();

        return redirect()->route('test2.index')->with('xabar','Yozuv muvaffaqqiyatli yaratildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a=Test2::find($id);
        return view('test2.show',['data'=>$a]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $a=Test2::find($id);
            return  view('test2.edit',['data'=>$a]);
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
        $a=Test2::find($id);
        $a->title=$request->title;
        $a->name=$request->text;
        if($request->hasFile('img')){
            $filename = time().'.'.$request->img->getClientOriginalExtension();
            $request->img->move(public_path('images'), $filename);

            $a->img=$filename;
        }
        $a->save();
        return redirect()->route('test2.index')->with('xabar','Yozuv muvaffaqqiyatli tahrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a=Test2::find($id);
        $a->delete();
        return redirect()->route('test2.index')->with('xabar','Yozuv muvaffaqqiyatli o\'chirildi');
    }
}
