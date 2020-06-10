<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->string('transaction_id')->unique()->nullable();
          $table->string('reference_code')->unique()->nullable();
          $table->unsignedInteger('status')->default(1)->nullable();
          
          $table->unsignedBigInteger('apartment_id')->nullable();
          $table->string('buyer_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
