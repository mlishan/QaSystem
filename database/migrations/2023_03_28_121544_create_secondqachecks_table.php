<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondqachecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondqachecks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('qaassignee');
            $table->tinyInteger('qafirefox');
            $table->tinyInteger('qaandroid');
            $table->tinyInteger('qasafari');
            $table->tinyInteger('qares_one');
            $table->tinyInteger('qares_two');
            $table->tinyInteger('qaemail_title');
            $table->tinyInteger('qaemail_link');
            $table->tinyInteger('qaemail_icon');
            $table->tinyInteger('qaemail_alignment');
            $table->tinyInteger('qameta_title');
            $table->tinyInteger('qalogo_title');
            $table->tinyInteger('qasize');
            $table->tinyInteger('qawatermark');
            $table->tinyInteger('qafavicon');
            $table->tinyInteger('qaalt_tag');
            $table->tinyInteger('qaimgtitle_tag');
            $table->tinyInteger('qaprivacy');
            $table->tinyInteger('qacreate_gal');
            $table->tinyInteger('qacf_email');
            $table->tinyInteger('qavalidation');
            $table->tinyInteger('qacf_style');
            $table->tinyInteger('qarevamp_link');
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
        Schema::dropIfExists('secondqachecks');
    }
}
