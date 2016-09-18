<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Sales extends Model {

    public static function getCumulativeSalesMonthly($territory) {

       $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                     ->where('invoice.teretoryId','=',$territory)
                     ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.total) as total','sum(sold_product.propit) as propit'),
                     DB::raw('sum(sold_product.propit) as propit'),
                     DB::raw('sum(sold_product.quantity) as quantity'),
                     DB::raw('sum(sold_product.freeIssue) as freeIssue'),'sold_product.productId')

            ->groupBy('sold_product.productId')

            ->get();
        return $sales;
    }
                //cumalative sale all the time
    public static function getCumulativeSales($territory) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory);


            })
            ->select(DB::raw('sum(sold_product.total) as total','sum(sold_product.propit) as propit'),
                DB::raw('sum(sold_product.propit) as propit'),
                DB::raw('sum(sold_product.quantity) as quantity'),
                DB::raw('sum(sold_product.freeIssue) as freeIssue'),'sold_product.productId')

            ->groupBy('sold_product.productId')

            ->get();
        return $sales;
    }

    public static function getTarget($territory) {

        $target=DB::table('territory_target')
            ->where('territoryId',$territory)
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->get();
        return $target;
    }

    public static function getCumulativeSales_Monthly_OneProduct($territory,$productId) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory)
                    ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.quantity) as quantity'))
            ->where('sold_product.productId',$productId)
            ->groupBy('sold_product.productId')
            ->pluck('quantity');
        return $sales;
    }


    public static function findPercentage($target,$sales) {
        $target=intval($target);
        if($target==0) {

            return "--";

        }else{
            $Percentage = ($sales/$target) * 100;
            return $Percentage;
        }


    }

    /////////////////////////////////////////////////////////////////////////////////
    public static function getSummerySales_Month($territory) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory)
                    ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.quantity) as quantity'))
            ->pluck('quantity');
        return $sales;
    }

    public static function getSummeryTotal_Month($territory) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory)
                    ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.total) as total'))
            ->pluck('total');
        return $sales;
    }

    public static function getSummeryFreeIssue_Month($territory) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory)
                    ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.freeIssue) as total'))
            ->pluck('total');
        return $sales;
    }

    public static function getSummeryProfit_Month($territory) {

        $sales=DB::table('sold_product')
            ->join('invoice', function($join) use ($territory)
            {
                $join->on('sold_product.InvoiceNo', '=', 'invoice.InvoiceNo')
                    ->where('invoice.teretoryId','=',$territory)
                    ->where('invoice.created_at', '>=', Carbon::now()->startOfMonth());

            })
            ->select(DB::raw('sum(sold_product.propit) as total'))
            ->pluck('total');
        return $sales;
    }
}
