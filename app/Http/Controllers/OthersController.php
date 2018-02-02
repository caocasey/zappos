<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Menu;
use App\Item;

use Illuminate\Http\Request;


class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMenu(Request $rid)
    {
        //
        $id = $rid->rid;
        $menus = Restaurant::find($id)->menus;
        return response()->json([
            'status'      => 'success',
            'status_code' => 200,
            'data'        => $this->transformMenu($menus->toArray()),]);
    }

    public function getItem(Request $iid)
    {
        //
        $id = $iid->iid;
        $items = Menu::find($id)->items;
        return response()->json([
            'status'      => 'success',
            'status_code' => 200,
            'data'        => $this->transformItem($items->toArray()),]);
    }


    private function transformMenu(array $menu)
    {

        $data = [];
        foreach ($menu as $m)
        {
            $data[] = [
                'menuName' => $m['mname'],
                'menuDescription' => $m['mdescription'],
                'serveTime' => $m['serve_time'],
            ];
        }

        return $data;
    }

    private function transformItem(array $item)
    {

        $data = [];
        foreach ($item as $i)
        {
            $data[] = [
                'itemName' => $i['iname'],
                'itemDescription' => $i['idescription'],
            ];
        }

        return $data;
    }
    

}
