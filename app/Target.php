<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Target extends Model {

    protected $table = 'territory_target';
    protected $fillable = [

        'productId',
        'territoryId',
        'target',
        'userId',


    ];


    public static function getCurrentTarget($productId,$territoryId) {
        $CTarget= DB::table('territory_target')
            ->where('productId', $productId)
            ->where('territoryId', $territoryId)
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->pluck('target');
        return $CTarget;
    }

}
