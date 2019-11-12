<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');//{first:'',middle:'',last:''}
            $table->string('gender');
            $table->date('dob');
            $table->string('placeDOB');
            $table->string('nationality');
            $table->string('passportnumber');
            $table->string('email');
            $table->string('phonenumber');
            $table->json('address');//{street:'',city:'',state:'',country:''}
            $table->string('document');
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
        Schema::dropIfExists('legalizations');
    }
}
