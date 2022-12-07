<?php

use App\Models\category_model;
use App\Models\Store;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(category_model::class)->nullable();
            $table->foreignIdFor(Store::class)->nullable();
            $table->string('name');
            // $table->string('categories');
            $table->string('merk');
            $table->integer('stock');
            $table->string('kondisi');
            $table->string('deskripsi');
            $table->decimal('price', 10, 3);
            $table->string('img');
            $table->integer('pcs');
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
        Schema::drop('chart');
    }
};
