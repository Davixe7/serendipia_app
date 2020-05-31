<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('types', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->float('built_area', 4,2);
      $table->float('private_area', 4,2);
      $table->float('free_height', 3,2);
    });
  }
  
  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('types');
  }
}
