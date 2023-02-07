<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('dashboard')->with('menu', $menu);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("menu.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $imageName = time().'.'.$request->uploadfile->extension();

        // $request->uploadfile->move(public_path('images'), $imageName);

        $menu = new Menu();
        $menu->name = $request->input('name');
        $menu->plat_day = $request->input('plat_day');
        $menu->about_plat = $request->input('about_plat');
        // $menu->uploadfile = $request->input('uploadfile');

        $file= $request->file('uploadfile');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $menu->uploadfile = $filename;

        $menu->save();

        // $input = $request->all();
        // Menu::create($input);
        return redirect('menu_plat')->with('flash_message', 'plat added secuusefully');
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
        $plat = Menu::find($id);
        return view('menu.edit')->with('plat', $plat);
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
        $menu_update = Menu::find($id);
        $menu_update->name = $request->input('name');
        $menu_update->plat_day = $request->input('plat_day');
        $menu_update->about_plat = $request->input('about_plat');
        // $menu->uploadfile = $request->input('uploadfile');

        $file= $request->file('uploadfile');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $menu_update->uploadfile = $filename;

        $menu_update->update();

        //
        // $menu = Menu::find($id);
        // $input = $request->all();
        // $menu->update($input);
        return redirect('menu_plat')->with('flash message', 'student updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('menu_plat')->with('flash_message', 'plat deleted succefully');
    }
}
