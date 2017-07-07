<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgicalFollowupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgical_followups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->text('complain')->nullable()->default(null);
            $table->text('examination')->nullable()->default(null);
            $table->text('investigation')->nullable()->default(null);
            $table->text('management')->nullable()->default(null);
            $table->string('post_up_days')->nullable()->default(null);
            $table->string('post_up_weeks')->nullable()->default(null);
            $table->string('post_up_months')->nullable()->default(null);
            $table->date('date')->nullable()->default(null);
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
        Schema::drop('surgical_followups');
    }
}
