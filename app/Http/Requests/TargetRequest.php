<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TargetRequest extends Request {

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
			'target'=>'max:9',
			'territoryId'=>'max:10',
			'userId'=>'max:10',
		];
	}

}
