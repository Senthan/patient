<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cvs_pr')->nullable()->default(null);
            $table->string('cvs_bp')->nullable()->default(null);
            $table->string('rs_spo2')->nullable()->default(null);
            $table->string('rs_lung')->nullable()->default(null);
            $table->string('abdomen_palpation')->nullable()->default(null);
            $table->string('abdomen_auscultation')->nullable()->default(null);
            $table->string('abdomen_genitalia')->nullable()->default(null);
            $table->text('abdomen_dre')->nullable()->default(null);
//            $table->integer('dre_id');
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
        Schema::drop('examinations');
    }
}
