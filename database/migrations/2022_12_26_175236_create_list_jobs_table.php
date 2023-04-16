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
        Schema::create('list_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_id');
            $table->string('title');
            $table->string('image');
            $table->string('time_job');
            // $table->string('date_time');
            $table->string('published');
            $table->string('location');
            $table->string('vacancy');
            $table->double('salary');
            $table->Text('description');
            $table->string('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('list_jobs');
    }
};
