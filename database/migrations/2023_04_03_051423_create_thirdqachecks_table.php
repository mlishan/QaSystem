<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdqachecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdqachecks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('qaassignee');
            $table->tinyInteger('qaie');
            $table->tinyInteger('qawindows');
            $table->tinyInteger('qalarge');
            $table->tinyInteger('qaopera');
            $table->tinyInteger('qaadd_spelling');
            $table->tinyInteger('qaarea_check');
            $table->tinyInteger('qapostal');
            $table->tinyInteger('qaadd_alignment');
            $table->tinyInteger('qaadd_icon');
            $table->tinyInteger('qaaadd_order');
            $table->tinyInteger('qamap');
            $table->tinyInteger('qaadd_format');
            $table->tinyInteger('qabe_unique');
            $table->tinyInteger('qadesc_area');
            $table->tinyInteger('qabe_meaningful');
            $table->tinyInteger('qacms');
            $table->tinyInteger('qablock');
            $table->tinyInteger('qaservice_area');
            $table->tinyInteger('qaimg_upload');
            $table->tinyInteger('qacompatible_design');
            $table->tinyInteger('qafont_size');
            $table->tinyInteger('qalayout_style');
            $table->tinyInteger('qaopacity');
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
        Schema::dropIfExists('thirdqachecks');
    }
}
