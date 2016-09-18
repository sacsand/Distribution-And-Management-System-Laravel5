<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Stock extends Model {

    protected $table = 'stock';
    protected $fillable = [

        'productId',
        'quantity',
        'territory',


    ];
    public function scopeStockCurrent($query,$pid,$tid){

         $query->where('productId', $pid)
             ->where('territory', $tid)
             ->first();

      }
    //model for ge territory under a area
    public static function getTerritory($AreaId) {
        $Territories=DB::table('teretory')
            ->select('*')
            ->where('AreaId',$AreaId)
            ->get();

        return $Territories;
    }

    public static function getArea() {
        $Areas=DB::table('area')
            ->select('*')
            ->get();

        return $Areas;
    }

    public static function getStock($productId,$territory) {
        $stock= DB::table('stock')
            ->where( 'productId', '=', $productId)
            ->where('territory',$territory)
            ->pluck('quantity');
        return $stock;
    }

    //sales person stock -- get stock according to the teretory
    public static function getStockSalesPerson($territory) {
        $stock= DB::table('stock')
            ->where('territory',$territory)
            ->get();
        return $stock;
    }


}
