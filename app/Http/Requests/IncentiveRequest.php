<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class IncentiveRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'productId' =>'max:7',
			'p90orMore' =>'max:10',
			'p100orMore' =>'max:10',
			'p110orMore' =>'max:10',
			'userId' =>'max:7',

		];
	}

}
