<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdassigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdassignees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('thirdassignee');
            $table->tinyInteger('ie');
            $table->tinyInteger('windows');
            $table->tinyInteger('large');
            $table->tinyInteger('opera');
            $table->tinyInteger('add_spelling');
            $table->tinyInteger('area_check');
            $table->tinyInteger('postal');
            $table->tinyInteger('add_alignment');
            $table->tinyInteger('add_icon');
            $table->tinyInteger('add_order');
            $table->tinyInteger('map');
            $table->tinyInteger('add_format');
            $table->tinyInteger('be_unique');
            $table->tinyInteger('desc_area');
            $table->tinyInteger('be_meaningful');
            $table->tinyInteger('cms');
            $table->tinyInteger('block');
            $table->tinyInteger('service_area');
            $table->tinyInteger('img_upload');
            $table->tinyInteger('compatible_design');
            $table->tinyInteger('font_size');
            $table->tinyInteger('layout_style');
            $table->tinyInteger('opacity');
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
        Schema::dropIfExists('thirdassignees');
    }
}
