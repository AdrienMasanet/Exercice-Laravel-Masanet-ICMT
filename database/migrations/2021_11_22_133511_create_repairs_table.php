<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('computer_id')->unsigned();
            $table->unsignedInteger('repairer_id')->unsigned();
            $table->unsignedInteger('client_id')->unsigned();
            $table->text('diagnostic');
            $table->boolean('is_repaired');
            $table->boolean('is_broken');
            $table->dateTime('returned_at')->nullable();
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
        Schema::dropIfExists('repairs');
    }
}
