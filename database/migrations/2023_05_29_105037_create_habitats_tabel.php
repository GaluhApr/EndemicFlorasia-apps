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
        Schema::create('habitats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_habitat', 50);
<<<<<<< HEAD
            $table->string('deskripsi_habitat', 500);
=======
            $table->string('deskripsi_habitat', 1000);
>>>>>>> e98ce4d642e3fd799cd0cd6a3ae157e27630d91d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitats');
    }
};
