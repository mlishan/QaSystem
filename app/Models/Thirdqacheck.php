<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirdqacheck extends Model
{
    use HasFactory;

     protected $fillable = ['project_id','qaassignee','qaie','qawindows','qalarge','qaopera','qaadd_spelling','qaarea_check','qapostal','qaadd_alignment','qaadd_icon','qaaadd_order','qamap','qaadd_format','qabe_unique','qadesc_area','qabe_meaningful','qacms','qablock','qaservice_area','qaimg_upload','qacompatible_design','qafont_size','qalayout_style','qaopacity'];
}
