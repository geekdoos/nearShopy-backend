<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'shop_id', 'like'
    ];
    /**
     * One like belong to a shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    /**
     * One like belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
