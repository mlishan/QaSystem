<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firstassignee extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','assignee','chrome','tab_horizontal','tab_vertical','ios','tel_format','tel_title','tel_link','tel_icon','tel_alignment','email_task','design_task','responsive_task','customer_changes','getfrom_task','addressdetails_task','social_link','shover_link','stitle_link','spellings_check','dummy_links','w3c_check'];

    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'assignee', 'id');
    }
}
