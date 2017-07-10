<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('patient_uuid');
            $table->string('serial_no')->nullable()->default(0);
            $table->string('name');
            $table->integer('age');
            $table->string('date');
            $table->string('ward');
            $table->string('B_H_T');
            $table->string('anaesthesis_name');
            $table->string('operation_theater');
            $table->string('admission_type');
            $table->enum('sex',['Male', 'Female'])->nullable()->default('Male'); // review is not verified
            $table->enum('status',['Authorised', 'Not Authorised'])->nullable()->default('Not Authorised'); // review is not verified
            $table->enum('diagnosis',['Active', 'Inactive'])->nullable()->default('Inactive'); // review is not verified
            $table->text('description');
            $table->text('address')->nullable();
            $table->integer('anaesthetic_id');
            $table->integer('examination_id');
            $table->integer('profile_id');
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
        Schema::drop('patients');
    }
}
