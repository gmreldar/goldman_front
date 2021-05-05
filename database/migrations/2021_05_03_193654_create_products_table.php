<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProductsTable
 */
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
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('slug');
            $table->string('img');
            $table->string('price');
            $table->enum('product_type', ['бу', 'новое']);
            $table->string('size');
            $table->enum('metal_type', ['золото', 'серебро']);
            $table->enum('gender_type', ['мужские', 'женские', 'унисекс']);
            $table->string('standard');
            $table->boolean('is_sold')->default(false);
            $table->boolean('is_active')->default(true);
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
