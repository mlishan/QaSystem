<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstqachecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstqachecks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->tinyInteger('qaassignee');
            $table->tinyInteger('qachrome');
            $table->tinyInteger('qa_horizontal');
            $table->tinyInteger('qa_vertical');
            $table->tinyInteger('qa_ios');
            $table->tinyInteger('qa_tel_format');
            $table->tinyInteger('qa_tel_title');
            $table->tinyInteger('qa_tel_link');
            $table->tinyInteger('qa_tel_icon');
            $table->tinyInteger('qa_tel_alignment');
            $table->tinyInteger('qa_email_task');
            $table->tinyInteger('qa_design_task');
            $table->tinyInteger('qa_responsive_task');
            $table->tinyInteger('qa_customer_changes');
            $table->tinyInteger('qa_getfrom_task');
            $table->tinyInteger('qa_addressdetails_task');
            $table->tinyInteger('qa_social_link');
            $table->tinyInteger('qa_shover_link');
            $table->tinyInteger('qa_stitle_link');
            $table->tinyInteger('qa_spellings_check');
            $table->tinyInteger('qa_dummy_links');
            $table->tinyInteger('qa_w3c_check');
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
        Schema::dropIfExists('firstqachecks');
    }
}
