<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');//{first:'',middle:'',last:''}
            $table->string('gender');
            $table->date('dob');
            $table->string('height');
            $table->string('eyeColor');
            $table->string('hireColor');
            $table->string('occupation');
            $table->string('previousPassport')->nullable();
            $table->string('placeOfIssue');
            $table->string('marital');//{street:'',city:'',state:'',country:''}
            $table->json('address');
            $table->string('pic');
            $table->string('purpose');
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
        Schema::dropIfExists('passports');
    }
}
