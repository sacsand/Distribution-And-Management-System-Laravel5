<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use App\Stock;
use App\Http\Controllers\Controller;
//use Request;
//use Illuminate\Http\Request;
use DB;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class StockController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Areas = Stock::getArea();
		return view('stock.index', compact('Areas'));
		//return $TID;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StockRequest $request)
	{

		$input = $request->all();
		foreach ($input['members'] as $row) {
			$items = new Stock([
				'productId' => $row['productId'],
				'quantity' => $row['quantity'],
				'territory' => $row['territory'],
			]);
				if($items['quantity'] != 0 ) {
					$check_stock_is_available = DB::table('stock')
						->select('quantity')
						->where('productId', $items['productId'])
						->where('territory', $items['territory'])
						->first();

					$count = count($check_stock_is_available);
					if ($items['quantity'] != 0 && $items['quantity'] > 0) {
						if ($count <= 0) {
							$items->save();
						}
					}
					if ($count > 0) {
						if ($items['quantity'] != 0 && $items['quantity'] > 0) {
							$curent_stock = $check_stock_is_available->quantity;
							$sum = $curent_stock + $items['quantity'];
							DB::table('stock')
								->where('productId', '=', $items['productId'])// "=" is optional
								->where('territory', '=', $items['territory'])// "=" is optional
								->update(['quantity' => $sum]);
							$sum = 0;
							//	$items->update(['quantity'=> 'sum']);
						}

						if ($items['quantity'] != 0 && $items['quantity'] < 0) ;
						{

							$curent_stock = $check_stock_is_available->quantity;
							$sum = $curent_stock + $items['quantity'];
							if ($sum >= 0) {
								DB::table('stock')
									->where('productId', '=', $items['productId'])// "=" is optional
									->where('territory', '=', $items['territory'])// "=" is optional
									->update(['quantity' => $sum, 'updated_at' => Carbon::now()]);
								$sum = 0;
							}

						}
					}
				}
			$territory=$items['territory'];

		}
		 //$input['published_at']= Carbon::now();
		//Stock::create($input);
		//DB::table('members')->insert($input);
		Flash::message('your stock has been updated');

		return redirect('stock');
		//return $input;
		//return redirect::back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//$product= DB::table('product')
			//->Join('stock', 'product.productId', '=', 'stock.productId')
			//->select('product.productId', 'product.name', 'stock.quantity')
		//	->where('stock.territory',$id)
		//	->get();
		$territory=$id;
		$product = Product::All() ;
		//$stock = Stock::All();
		return view('stock.home', compact('product','territory'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
