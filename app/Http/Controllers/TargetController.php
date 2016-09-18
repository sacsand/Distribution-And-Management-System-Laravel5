<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Target;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use DB;

class TargetController extends Controller {

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
		 return view('target.index');
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
	public function store(Requests\TargetRequest $request)
	{
		$user = 'U001';
		$input = $request->all();
		foreach ($input['members'] as $row) {
			$items = new Target([
				'productId' => $row['productId'],
				'territoryId' => $row['territoryId'],
				'target' => $row['target'],
				'userId' => $user,
			]);

		if ($items['target'] > 0) {
			$check_target_available = DB::table('territory_target')
				->select('target')
				->where('productId', $items['productId'])
				->where('territoryId', $items['territoryId'])
				->where('created_at', '>=', Carbon::now()->startOfMonth())
				->first();

			$count = count($check_target_available);

			if ($count <= 0) {

				$items->save();

			}else{

					DB::table('territory_target')
						->where('productId', '=', $items['productId'])
						->where('territoryId', '=', $items['territoryId'])
						->where('created_at', '>=', Carbon::now()->startOfMonth())
						->update(['target' => $items['target'],'updated_at' => Carbon::now() ]);

			   }


		}
		}

		Flash::message('your target has been updated');

		return redirect('target');
		//return $input;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{


		$product = Product::All() ;
		//$stock = Stock::All();
		return view('target.home', compact('product'));
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
