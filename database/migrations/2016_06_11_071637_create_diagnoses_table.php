<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('co_mobidities')->nullable()->default(null);
            $table->text('drugs_on')->nullable()->default(null);
            $table->string('height')->nullable()->default(null);
            $table->integer('staff_id')->nullable()->default(null);
            $table->string('weight')->nullable()->default(null);
            $table->string('bmi')->nullable()->default(null);
            $table->date('date')->nullable()->default(null);
            $table->string('refferred_from')->nullable()->default(null);
            $table->text('presenting_complain')->nullable()->default(null);
            $table->text('past_surgical_history')->nullable()->default(null);
            $table->integer('examination_id')->nullable()->default(null);
            $table->text('allergic_history')->nullable()->default(null);
            $table->text('management_plan')->nullable()->default(null);
            $table->text('x_ray')->nullable()->default(null);
            $table->text('ct_scan')->nullable()->default(null);
            $table->text('miri_scan')->nullable()->default(null);
            $table->text('other_imaging')->nullable()->default(null);
            $table->text('follow_up')->nullable()->default(null);
            $table->text('en_treatment_template')->nullable()->default(null);
            $table->text('ta_treatment_template')->nullable()->default(null);
            $table->text('si_treatment_template')->nullable()->default(null);
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
        Schema::drop('diagnoses');
    }
}
