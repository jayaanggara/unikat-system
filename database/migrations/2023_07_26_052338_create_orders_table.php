<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->date('bookingdate');
            $table->string('country',100);
            $table->integer('qty');
            $table->bigInteger('total_price');
            $table->enum('status',['unpaid','paid']);

            $table->uuid('id_tour');

            $table->foreign('id_tour')->references('id')->on('tour_paket')->onDelete('cascade');

            $table->timestamps();
            $table->primary('id');
        });

        Schema::create('addons_order', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('id_order');
            $table->uuid('id_addons');

            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('id_addons')->references('id')->on('tour_addons')->onDelete('cascade');

            $table->timestamps();
            $table->primary('id');
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
