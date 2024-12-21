<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('otpravkas', function (Blueprint $table) {
        $table->id();
        $table->string('hpi');
        $table->string('name');
        $table->string('email');
        $table->string('otkuda');
        $table->string('kuda');
        $table->timestamps();
    });
}
};