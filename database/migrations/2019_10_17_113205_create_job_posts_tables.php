<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('job_title');
            $table->string('job_location');
            $table->text('job_desc');
            $table->string('min_exp');
            $table->string('max_exp');
            $table->boolean('resume_req')->default(1);
            $table->decimal('sal_min', 8, 2);
            $table->decimal('sal_max', 8, 2);
            $table->date('open_dt');
            $table->date('close_dt');
            $table->decimal('no_of_pos', 4, 1);
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
        Schema::dropIfExists('job_posts_tables');
    }
}
