<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ID');
            $table->string('Email');
            $table->string('Password');
           
        });

        Schema::create('merit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('FSc_Marks');
            $table->string('Total_Marks');
            $table->string('Test_Marks');
            $table->string('Interview_Marks');
            $table->string('Aggregate');
            $table->string('Program');
           
        });

        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Gender');
            $table->string('Email');
            $table->string('Password');
            $table->string('FSc_Marks');
            $table->string('Total_Marks');
            $table->string('Test_Marks');
            $table->string('Interview_Marks');
            $table->string('Aggregate');
            $table->string('Program');
            $table->string('Number');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
