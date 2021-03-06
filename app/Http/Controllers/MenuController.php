<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::all();
        return response()->json([
            'status'      => 'success',
            'status_code' => 200,
            'data'        => $this->transforms($menus->toArray()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $menu = Menu::create($request->all());

        return response()->json([
            'status'      => 'success',
            'status_code' => 201,//create object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
        //show a specific menu info
        return response()->json([
        'status'      => 'success',
        'status_code' => 200,
        'data'        => $this->transform($menu->toArray()),]);
    }

    //return all tuples
    private function transforms(array $menus)
    {
        return array_map([$this, 'transform'], $menus);
    }

    //return singal tuple
    private function transform(array $menu)
    {
        return [
        'menuName'   => $menu['mname'],
        'menuDescription' => $menu['mdescription'],
        'serveTime' => $menu['serve_time'],];
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
        $menu->update($request->all());

        return response()->json([
            'status'      => 'success',
            'status_code' => 200,//ok
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
        $menu->delete();

        return response()->json([
            'status'      => 'success',
            'status_code' => 204, //null
        ]);
    }
}
