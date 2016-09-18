<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model {


    protected $table = 'product';
    protected $fillable = [

			'productId',
			'name',
			'weight',
			'caseMakeup',
			'unitPrice_ws',
		    'casePrice_ws',
			'unitPrice_tf',
			'casePrice_tf',
			'priceConsumer',
			'category',
			'freeIssueRate',

    ];


	public static function getProductName($productId) {
		$product_name= DB::table('product')
			->where('productId',$productId)
			->pluck('name');
		return $product_name;
	}


}
