<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;


class Incentive extends Model {
    protected $table = 'incentives';
    protected $fillable = [

        'productId',
        'p90orMore',
        'p100orMore',
        'p110orMore',
        'userId',

    ];


    public static function getIncentive90($productId) {

        $incentive=DB::table('incentives')
            ->where('productId', $productId)
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->pluck('p90orMore');

            return $incentive;

    }

    public static function getIncentive100($productId) {

            $incentive=DB::table('incentives')
                ->where('productId', $productId)
                ->where('created_at', '>=', Carbon::now()->startOfMonth())
                ->pluck('p100orMore');

            return $incentive;

    }

    public static function getIncentive110($productId) {

            $incentive=DB::table('incentives')
                ->where('productId', $productId)
                ->where('created_at', '>=', Carbon::now()->startOfMonth())
                ->pluck('p110orMore');

            return $incentive;

    }

    public static function getIncentiveId($productId) {

            $incentive=DB::table('incentives')
                ->where('productId', $productId)
                ->where('created_at', '>=', Carbon::now()->startOfMonth())
                ->pluck('id');

            return $incentive;

    }
}
