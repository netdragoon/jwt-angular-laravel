<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreditosMigration extends Migration
{
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 50);
            $table->boolean('status');
        });
    }
    public function down()
    {
        Schema::drop('creditos');
    }
}
