<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','status','start_date','end_date','owner_id','user_ids'];

    public function owner(){
        return $this->belongsTo(User::class, "owner_id", "id");
    }

    public function users(){
        return User::whereIn('id', explode(',', $this->user_ids))->get();
    }

    public function tasks(){
        return $this->hasMany(Task::class, "project_id", "id");
    }

    public function progress(){
        $result = 0;

        $completed_tasks = $this->tasks->filter(function($val){
            return $val->status == 1;
        });

        if( $this->tasks->count() > 0 ){
            $result = round(($completed_tasks->count() / $this->tasks->count() ) * 100);
        }
        return $result;
    }

    public function firstassignee(){
        return $this->hasOne(Firstassignee::class, 'project_id', 'id');
    }

    public function secondassignee(){
        return $this->hasOne(Secondassignee::class, 'project_id', 'id');
    }

    public function thirdassignee(){
        return $this->hasOne(Thirdassignee::class, 'project_id', 'id');
    }

    public function lastqasignee(){
        return $this->hasOne(Lastqacheck::class, 'project_id', 'id');
    }

    public function firstqasignee(){
        return $this->hasOne(Firstqacheck::class, 'project_id', 'id');
    }

    public function secondqasignee(){
        return $this->hasOne(Secondqacheck::class, 'project_id', 'id');
    }

    public function thirdqasignee(){
        return $this->hasOne(Thirdqacheck::class, 'project_id', 'id');
    }
}
