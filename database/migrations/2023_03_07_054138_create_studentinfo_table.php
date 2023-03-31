<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentInfo', function (Blueprint $table) {
            $table->id('sno');
            $table->string('idNo', 8);
            $table->string('firstName', 20);
            $table->string('middleName', 15)->nullable();
            $table->string('lastName', 15);
            $table->string('suffix', 5)->nullable();
            $table->string('course', 15);
            $table->smallinteger('year');
            $table->date('birthdate', 20);
            $table->string('gender', 6);
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
        Schema::dropIfExists('studentinfo');
    }
}
