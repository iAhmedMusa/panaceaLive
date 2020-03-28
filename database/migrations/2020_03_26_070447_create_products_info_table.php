<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned()->index('products_info_cat_id_foreign');
            $table->integer('p_id')->unsigned()->index('products_info_p_id_foreign');
            $table->string('p_unique_code', 50)->unique();
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
        Schema::dropIfExists('products_info');
    }
}
