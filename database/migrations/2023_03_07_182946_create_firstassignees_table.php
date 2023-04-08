<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstassigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstassignees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('assignee');
            $table->tinyInteger('chrome');
            $table->tinyInteger('tab_horizontal');
            $table->tinyInteger('tab_vertical');
            $table->tinyInteger('ios');
            $table->tinyInteger('tel_format');
            $table->tinyInteger('tel_title');
            $table->tinyInteger('tel_link');
            $table->tinyInteger('tel_icon');
            $table->tinyInteger('tel_alignment');
            $table->tinyInteger('email_task');
            $table->tinyInteger('design_task');
            $table->tinyInteger('responsive_task');
            $table->tinyInteger('customer_changes');
            $table->tinyInteger('getfrom_task');
            $table->tinyInteger('addressdetails_task');
            $table->tinyInteger('social_link');
            $table->tinyInteger('shover_link');
            $table->tinyInteger('stitle_link');
            $table->tinyInteger('spellings_check');
            $table->tinyInteger('dummy_links');
            $table->tinyInteger('w3c_check');
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
        Schema::dropIfExists('firstassignees');
    }
}
