<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned()->nullable();

            $table->string('code')->unique();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('sizes')->nullable();
            $table->string('colors')->nullable();
            $table->double('price', 8, 2);
            $table->double('prev_price', 8, 2)->nullable();
            $table->integer('stock');
            $table->integer('sold')->default(0);
            $table->boolean('discount')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(1);
            
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
        Schema::dropIfExists('products');
    }
}
