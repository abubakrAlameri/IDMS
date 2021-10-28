<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('report_name');
            $table->unsignedBigInteger('infec_id');
            $table->bigInteger('num_infected');
            $table->bigInteger('num_recoverd');
            $table->bigInteger('num_death');
            $table->timestamps();

            $table->foreign('infec_id')
                ->references('infec_id')
                ->on('infection_diseases')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
