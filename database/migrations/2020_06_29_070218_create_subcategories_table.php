<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string ('subcategory_name');
            $table->string ('subcategory_image');
            $table->string ('subcategory_discription');
            $table->float ('subcategory_discount');
            $table->string ('subcategory_meta_title');
            $table->string ('subcategory_meta_discription');
            $table->string ('subcategory_meta_keyword');
            $table->tinyInteger ('subcategory_status');
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
        Schema::dropIfExists('subcategories');
    }
}
