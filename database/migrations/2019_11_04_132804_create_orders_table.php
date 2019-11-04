<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_order');
            $table->string('qrCode')->nullable();
            $table->integer('idUser');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->decimal('money')->default(0);
            $table->decimal('shipPrice')->default(0);
            $table->decimal('discount')->default(0);
            $table->string('message')->nullable();
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('orders');
    }
}
