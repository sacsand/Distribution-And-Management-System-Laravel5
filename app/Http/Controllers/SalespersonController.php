<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Product;
use App\Stock;
use App\Sales;
use DB;
use Laracasts\Flash\Flash;
use Carbon\Carbon;


class SalespersonController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
        //get sales person current stock
    public function getStock($territory)
    {

        $stock=Stock::getStockSalesPerson($territory);
        return view('salesperson.stock',compact('stock'));

    }
   //get sles person monthly sales
    public function getSalesMonthly($territory)
    {

        $sales=Sales::getCumulativeSalesMonthly($territory);
        return view('salesperson.cumulativeSalesMonthly',compact('sales'));
       // return $sales;

    }

    public function getSalesAll($territory)
    {

        $sales=Sales::getCumulativeSales($territory);
        return view('salesperson.cumulativeSales',compact('sales'));
        // return $sales;

    }

    public function getIncentiveMonth($territory)
    {

        $targets=Sales::getTarget($territory);
        return view('salesperson.incentive',compact('targets','territory'));


    }

    public function getTargetComplete($territory)
    {
        $completes=Sales::getCumulativeSales($territory);
        return view('salesperson.targetCompletion',compact('completes','territory'));

    }

    ///////////////////////////////////////////////////////////////////////////////////////////////

    public function getDashboard()
    {

        return view('salesperson.dashboard');

    }
}
