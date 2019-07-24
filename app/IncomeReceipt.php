<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeReceipt extends Model
{
    //
	protected $table = 'income_receipt';

    protected $fillable = [
        'ward_number', 'customer_name', 'customer_address','invoice_number','paid_at','item_id', 'item_name','item_code', 'account_no', 'price', 'quantity','total','paid_amount','due_amount','total_amount', 'amount_in_words', 'created_by', 'modified_by',
    ];
	
	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
