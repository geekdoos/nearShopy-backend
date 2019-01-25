<?php

namespace App\Http\Controllers;

use App\Like;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lat = $request->get('lat');
        $lng = $request->get('lng');

        return response()->json(Shop::getAllSortedByDistance($lat, $lng));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $shop = Shop::create($request->all());

        return $shop;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Shop::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update($request->all());

        return $shop;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();

        return 204;

    }

    /**
     * This method will take the id of the shop and the request
     * to save the like of an user on database
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function like(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);

        $shop->update([
            'like_count' => intval($shop['like_count']) + 1
        ]);
        $shop = Like::create(
            [
                'user_id' => 1,
                'shop_id' => $id,
                'like' => 1
            ]
        );

        return $shop;
    }

    /**
     * This method will take the id of the shop and the request
     * to save the dislike of an user on database
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function dislike(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update([
            'dislike_count' => intval($shop['dislike_count']) + 1
        ]);


        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => $id,
                'like' => 0
            ]
        );

        return $shop;
    }

}
