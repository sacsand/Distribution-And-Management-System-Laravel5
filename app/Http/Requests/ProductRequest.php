<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'productId' =>'required|min:6|max:6',
			'name' =>'required',
			'weight' =>'max:5',
			'caseMakeup' =>'required|max:7',
			'unitPrice_ws' =>'required|max:7',
			'casePrice_ws' =>'required|max:7',
			'unitPrice_tf' =>'required|max:7',
			'casePrice_tf' =>'required|max:7',
			'priceConsumer' =>'required|max:7',
			'category' =>'required',
			'freeIssueRate' =>'required|max:2',
		];
	}

}
