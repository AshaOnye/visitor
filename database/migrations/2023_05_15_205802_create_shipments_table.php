<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('uid');
            $table->string('shipid')->nullable();
            $table->string('fullname')->nullable();
            $table->string('storename')->nullable();
            $table->longtext('tracking_number')->nullable();
            $table->string('order_number')->nullable();
            $table->datetime('package_from')->nullable();
            $table->datetime('package_to')->nullable();
            $table->longtext('upload')->nullable();
            $table->string('package_descp')->nullable();
            $table->string('delivery_option')->nullable();
            $table->datetime('datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
