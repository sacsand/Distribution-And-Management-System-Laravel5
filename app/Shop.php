<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Shop extends Model {

    protected $table = 'shops';
    protected $fillable = [

        'shopId',
        'name',
        'address',
        'phone',
        'routeId',

    ];

    //for sales person
    public static function getRoute($territory) {
        $route= DB::table('route')
            ->where( 'TeretoryId', '=', $territory)
            ->get();
        return $route;
    }


}
