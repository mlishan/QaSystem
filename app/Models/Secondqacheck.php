<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondqacheck extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','qaassignee','qafirefox','qaandroid','qasafari','qares_one','qares_two','qaemail_title','qaemail_link','qaemail_icon','qaemail_alignment','qameta_title','qalogo_title','qasize','qawatermark','qafavicon','qaalt_tag','qaimgtitle_tag','qaprivacy','qacreate_gal','qacf_email','qavalidation','qacf_style','qarevamp_link'];
}
