<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('available')->default(true);
            $table->unsignedInteger('number')->unique();
            $table->unsignedInteger('floor');
            $table->unsignedInteger('type');
            $table->integer('apt_value');
            $table->integer('finance_value')->default(0);
            $table->float('initial_quota',3,1)->default(0);
            $table->integer('monthly_quota')->default(0);
            $table->integer('instalment');
            $table->date('release_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
