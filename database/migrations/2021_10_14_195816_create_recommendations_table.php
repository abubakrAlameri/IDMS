<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id('recom_id');
            $table->unsignedBigInteger('infec_id');
            $table->string('subject');
            $table->text('details');
            $table->string('attachment');
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
        Schema::dropIfExists('recommendations');
    }
}
