<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('mobile');
            $table->string('message');
            $table->timestamps();
        });

        Schema::create('form_careers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('job_id');
            $table->string('name');
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('mobile');
            $table->string('message');
            $table->text('file_path');
            $table->timestamps();
        });

        Schema::create('form_feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();
        });

        Schema::create('form_vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('person_name');
            $table->string('person_email');
            $table->string('person_desg');
            $table->text('postal_address');
            $table->string('person_phone1');
            $table->string('person_phone2');
            $table->string('epc');
            $table->text('products');
            $table->string('gst');
            $table->text('file_path');
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
        Schema::dropIfExists('form_contacts');
        Schema::dropIfExists('form_careers');
        Schema::dropIfExists('form_feedbacks');
        Schema::dropIfExists('form_vendors');
    }
}
