<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondassignee extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','secondassignee','firefox','android','safari','res_one','res_two','email_title','email_link','email_icon','email_alignment','meta_title','logo_title','size','watermark','favicon','alt_tag','imgtitle_tag','privacy','create_gal','cf_email','validation','cf_style','revamp_link'];

    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'secondassignee', 'id');
    }
}
