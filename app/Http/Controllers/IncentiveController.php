<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Target;
use App\Incentive;
use Carbon\Carbon;
use Laracasts\Flash\Flash;

use DB;


class IncentiveController extends Controller {

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

		$product = Product::All() ;
		//$stock = Stock::All();


		return view('incentive.index',compact('product'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\IncentiveRequest $request)
	{
		$input = $request->all();
		$input['userId']="us100";
		Incentive::create($input);

		Flash::message('records has been added');

		return redirect('incentive');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$productId=$id;
		return view('incentive.create',compact('productId'));
		//return $productId;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$incentive = Incentive::findOrFail($id);
		return view('incentive.edit',compact('incentive'));
		//return $incentive;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Requests\IncentiveRequest $request)
	{
		$incentive = Incentive::findOrFail($id);

		$incentive->update($request->all());
		Flash::message('Record has been updated');
		return redirect('incentive');
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
