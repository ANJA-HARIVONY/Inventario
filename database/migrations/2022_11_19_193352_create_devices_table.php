<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('description')->nullable();
            $table->boolean('active')->default(true);
            $table->string('serial_number')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('model')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('firmware')->nullable();
            $table->integer('stock')->default(1);
            $table->integer('hdd')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('cpu')->nullable();
            $table->integer('gpu')->nullable();
            $table->integer('totla_slots')->nullable();
            $table->text('history')->nullable();

            // Relacion entre device y tipo

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');


            // Relacion entre device y System Operative SO

            $table->unsignedBigInteger('sos_id');
            $table->foreign('sos_id')->references('id')->on('sos');


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
        Schema::dropIfExists('devices');
    }
};
