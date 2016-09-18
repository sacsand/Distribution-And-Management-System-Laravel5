<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StockRequest extends Request {

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
			'productId'=>'max:10',
			'quantity'=>'max:5',
			'territory'=>'max:10',

		];
	}

	public static function someStaticFunction($var1, $var2) {

	}

}
