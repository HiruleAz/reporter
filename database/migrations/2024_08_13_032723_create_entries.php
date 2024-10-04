<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('entryno');
            $table->int('idno');
            $table->int('sampleno');
            $table->tinyInteger('sampleuse');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string  ('gastype');
            $table->double('cemsmg');
            $table->double('cemsO2');
            $table->double('cemsH2O');
            $table->double('scems');
            $table->double('srmmg');
            $table->double('srmO2');
            $table->double('srmH2O');
            $table->double('ssrm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
