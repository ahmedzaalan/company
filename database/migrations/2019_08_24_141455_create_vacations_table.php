<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('vacation_type_id');
            $table->unsignedInteger('employee_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->unsignedInteger('vacation_status_id');
            $table->unsignedInteger('approved_by_emp_id');//الموظف اللي وافق او رفض
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
        Schema::dropIfExists('vacations');
    }
}
