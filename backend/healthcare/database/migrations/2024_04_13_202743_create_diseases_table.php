<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('precautions');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diseases');
    }
};
