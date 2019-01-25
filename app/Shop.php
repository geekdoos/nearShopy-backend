<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Shop extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'lat', 'lng', 'like_count', 'dislike_count'
    ];

    /**
     * One shop has many likes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * This method will get the latitude and longitude from the frontend
     * and calculate the distance between the user
     * localisation and nearest shops
     *
     * @param $lat
     * @param $lng
     * @return mixed
     */
    public static function getAllSortedByDistance($lat, $lng)
    {
        $lat = floatval($lat);
        $lng = floatval($lng);
        $radius = 5;
        $shops = Shop::select([
            '*',
            DB::raw("( 6371 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance")
        ])->havingRaw('distance', [$radius])->orderBy('distance')->get();

        return $shops;
    }
}
