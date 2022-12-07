<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\category_model;
use App\Models\Store;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(category_model::class);
            $table->foreignIdFor(Store::class);
            $table->string('name');
            $table->string('merk');
            $table->integer('stock');
            $table->string('kondisi');
            $table->string('deskripsi');
            $table->decimal('price', 10, 3);
            $table->string('img');
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
        Schema::drop('product');
    }
};
