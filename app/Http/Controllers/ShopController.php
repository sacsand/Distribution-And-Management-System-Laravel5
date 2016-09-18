<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Shop;

use DB;



class ShopController extends Controller {


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
		return view('shops.index_s');
	}

	public function index_admin()
	{
		return view('shops.index_admin');
	}

	public function shopAdd($id)
	{
		return view('shops.create',compact('id'));
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
	public function store(Requests\ShopRequest $request)
	{
		$input = $request->all();
		$temp=DB::table('route')->max('IndexNo');
		$temp="SP".$temp;
		$input['shopId']=$temp;
		Shop::create($input);

		Flash::message('shop has been added');

		return redirect('shop');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$shops = DB::table('shops')
			->where('routeId', $id)
			->get();
		return view('shops.home',compact('shops'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shop = Shop::findOrFail($id);
		return view('shops.edit',compact('shop'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\ShopRequest $request,$id)
	{
		$shop = Shop::findOrFail($id);

		$shop->update($request->all());
		Flash::message('Record has been updated');
		return redirect('shop');
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
