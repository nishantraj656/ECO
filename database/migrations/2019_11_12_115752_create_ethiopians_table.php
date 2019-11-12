<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEthiopiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethiopians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');//{first:'',middle:'',last:''}
            $table->string('gender');
            $table->date('dob');
            $table->string('placeOfBirth');
            $table->string('nasality');
            $table->string('passportnumber');
            $table->string('marital');
            $table->json('address');//{street:'',city:'',state:'',country:''}
            $table->string('pic');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('paymentID');
            $table->string('status');
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
        Schema::dropIfExists('ethiopians');
    }
}
