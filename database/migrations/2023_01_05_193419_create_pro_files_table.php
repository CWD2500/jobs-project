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
        Schema::create('pro_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('full_name');
            $table->string('email')->uniqid();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();;
            $table->Text('address')->nullable();;
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pro_files');
    }
};
