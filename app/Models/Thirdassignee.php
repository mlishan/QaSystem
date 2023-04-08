<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirdassignee extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','thirdassignee','ie','windows','large','opera','add_spelling','area_check','postal','add_alignment','add_icon','add_order','map','add_format','be_unique','desc_area','be_meaningful','cms','block','service_area','img_upload','compatible_design','font_size','layout_style','opacity'];

    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'thirdassignee', 'id');
    }
}
