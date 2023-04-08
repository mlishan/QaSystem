<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondassigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondassignees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('secondassignee');
            $table->tinyInteger('firefox');
            $table->tinyInteger('android');
            $table->tinyInteger('safari');
            $table->tinyInteger('res_one');
            $table->tinyInteger('res_two');
            $table->tinyInteger('email_title');
            $table->tinyInteger('email_link');
            $table->tinyInteger('email_icon');
            $table->tinyInteger('email_alignment');
            $table->tinyInteger('meta_title');
            $table->tinyInteger('logo_title');
            $table->tinyInteger('size');
            $table->tinyInteger('watermark');
            $table->tinyInteger('favicon');
            $table->tinyInteger('alt_tag');
            $table->tinyInteger('imgtitle_tag');
            $table->tinyInteger('privacy');
            $table->tinyInteger('create_gal');
            $table->tinyInteger('cf_email');
            $table->tinyInteger('validation');
            $table->tinyInteger('cf_style');
            $table->tinyInteger('revamp_link');
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
        Schema::dropIfExists('secondassignees');
    }
}
