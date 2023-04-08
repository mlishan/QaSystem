<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firstqacheck extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','qaassignee','qachrome','qa_horizontal','qa_vertical','qa_ios','qa_tel_format','qa_tel_title','qa_tel_link','qa_tel_icon','qa_tel_alignment','qa_email_task','qa_design_task','qa_responsive_task','qa_customer_changes','qa_getfrom_task','qa_addressdetails_task','qa_social_link','qa_shover_link','qa_stitle_link','qa_spellings_check','qa_dummy_links','qa_w3c_check'];
}
