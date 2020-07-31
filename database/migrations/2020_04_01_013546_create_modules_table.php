<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {

            $table->increments('id');
            $table->string('module_name')->nullable();
            $table->string('module_number')->nullable();
            $table->string('module_type')->nullable();
            $table->text('module_description')->nullable();
            $table->integer('temperature')->nullable();
            $table->integer('operating_time')->nullable();
            $table->integer('data_number')->nullable();
            $table->string('working_condition')->nullable();

            $table->string('power_supply')->nullable();
            $table->string('energy_consumption')->nullable();
            $table->string('material')->nullable();
            $table->string('dimension')->nullable();
            $table->string('compliance')->nullable();
            $table->string('MTBF')->nullable();
            $table->string('luminosity')->nullable();
            $table->string('visual_field')->nullable();
            $table->string('data')->nullable();
            $table->string('communication')->nullable();
            $table->string('input_output')->nullable();
            $table->string('interface_service')->nullable();

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
        Schema::dropIfExists('modules');
    }
}
