<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $restaurants = Restaurant::all();
        return response()->json([
            'status'      => 'success',
            'status_code' => 200,
            'data'        => $this->transforms($restaurants->toArray()),
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
        $restaurant = Restaurant::create($request->all());

        return response()->json([
            'status'      => 'success',
            'status_code' => 201,//create object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //show a specific restaurant info
    
        return response()->json([
        'status'      => 'success',
        'status_code' => 200,
        'data'        => $this->transform($restaurant->toArray()),]);
    }

    //return all tuples
    private function transforms(array $restaurants)
    {
        return array_map([$this, 'transform'], $restaurants);
    }

    //return singal tuple
    private function transform(array $restaurant)
    {
        return [
        'restaurantName'   => $restaurant['rname'],
        'restaurantDescription' => $restaurant['rdescription'],];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
        $restaurant->update($request->all());

        return response()->json([
            'status'      => 'success',
            'status_code' => 200,//ok
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
         $restaurant->delete();

        return response()->json([
            'status'      => 'success',
            'status_code' => 204, //null
        ]);

    }

    
    

}
