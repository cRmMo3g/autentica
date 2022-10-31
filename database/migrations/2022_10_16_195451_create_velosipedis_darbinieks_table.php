<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('velosipedis_darbinieks', function (Blueprint $table) {
            $table->id();
            $table->text('velosipedi_id')->nullable();
            $table->text('darbinieki_id')->nullable();
            $table->dateTime('laiks_no')->nullable();
            $table->dateTime('laiks_lidz')->nullable();

            $table->index('velosipedi_id', 'velosipedi_darbinieki_velosipedi_idx');
            $table->index('darbinieki_id', 'velosipedi_darbinieki_darbinieki_idx');

            $table->foreign('velosipedi_id', 'velosipedi_darbinieki_velosipedi_ft')->on('velosipedis')->references('id');
            $table->foreign('darbinieki_id', 'velosipedi_darbinieki_darbinieki_fx')->on('darbinieks')->references('id');
            

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('velosipedis_darbinieks');
    }
};
