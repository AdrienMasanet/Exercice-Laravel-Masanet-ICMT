<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('lends', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });

        Schema::table('requests', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('computer_id')->references('id')->on('computers')->nullOnDelete();
        });

        Schema::table('components', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete();
        });

        Schema::table('computers', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands')->nullOnDelete();
        });

        Schema::table('repairs', function (Blueprint $table) {
            $table->foreign('computer_id')->references('id')->on('computers')->nullOnDelete();
            $table->foreign('repairer_id')->references('id')->on('repairers')->nullOnDelete();
            $table->foreign('client_id')->references('id')->on('users')->nullOnDelete();
        });

        Schema::table('computers_components', function (Blueprint $table) {
            $table->foreign('computer_id')->references('id')->on('computers')->cascadeOnDelete();
            $table->foreign('component_id')->references('id')->on('components')->cascadeOnDelete();
        });

        Schema::table('repairs_repair_types', function (Blueprint $table) {
            $table->foreign('repair_id')->references('id')->on('repairs')->cascadeOnDelete();
            $table->foreign('repair_type_id')->references('id')->on('repair_types')->cascadeOnDelete();
        });

        Schema::table('repairs_breakdowns', function (Blueprint $table) {
            $table->foreign('repair_id')->references('id')->on('repairs')->cascadeOnDelete();
            $table->foreign('breakdown_id')->references('id')->on('breakdowns')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
