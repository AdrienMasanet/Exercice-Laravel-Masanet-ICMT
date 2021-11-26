<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 15);
            $table->string('email');
            $table->string('siret', 17);
            $table->string('address');
            $table->string('city');
            $table->mediumInteger('postal_code');
            $table->string('country');
            $table->boolean('is_internal');
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
        Schema::dropIfExists('repairers');
    }
}
