<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeReceipt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_receipt', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('ward_number');
			$table->string('customer_name');
			$table->text('customer_address')->nullable();
			$table->string('invoice_number');
			$table->date('paid_at');
			$table->integer('item_id')->nullable();
			$table->string('item_name');
			$table->string('item_code')->nullable();
			$table->string('account_no');
			$table->double('price', 15, 4);
			$table->double('quantity', 7, 2);
			$table->double('total', 15, 4);
			$table->double('paid_amount', 15, 4);
			$table->double('due_amount', 15, 4);
			$table->double('total_amount', 15, 4);
			$table->text('amount_in_words')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_receipt');
    }
}
