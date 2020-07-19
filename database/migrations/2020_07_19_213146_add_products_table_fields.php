<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductsTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('title');
            $table->string('price');
            $table->string('image');
            $table->text('description');
            $table->boolean('published');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumn("title");
        Schema::dropColumn("price");
        Schema::dropColumn("image");
        Schema::dropColumn("description");
        Schema::dropColumn("published");
    }
}
