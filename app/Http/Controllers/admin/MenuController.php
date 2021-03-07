<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Service;
use Illuminate\Http\Request;

class MenuController extends Controller
{/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $menus = Menu::orderBy('id','DESC')->get();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name'=>'required',
            'link'=>'required',
        ]);


        Menu::insert([
            'name'=> $request->name,
            'link'=> $request->link,
        ]);
        return redirect()->route('menu.index')->with('successMsg','Menu Added Suceesfully!!');
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
        $menu = Menu::find($id);
        return view('admin.menu.edit',compact('menu'));
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
        //validation
        $request->validate([
            'name'=>'required',
            'link'=>'required',
        ]);

        Menu::find($id)->update([
            'name'=> $request->name,
            'link'=> $request->link,
        ]);
        return redirect()->route('menu.index')->with('successMsg','Menu Added Suceesfully!!');

    }

    public function onlineStatus($id)
    {
        $online = Menu::find($id);
        $online->status = 1;
        $online->save();
        return redirect()->route('menu.index')->with('successMsg','Status has been  Changed!!');
    }

    public function offlineStatus($id)
    {
        $online = Menu::find($id);
        $online->status = 0;
        $online->save();
        return redirect()->route('menu.index')->with('successMsg','Status has been  Changed!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt =  Menu::find($id)->delete();
        return redirect()->back()->with('successMsg','Menu Deleted Successfully!!');
    }
}
