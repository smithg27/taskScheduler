<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'completed',
        'assignee',
        'creator',
        'dueDate',
        'subTasks',
        'parentTask',
        'location',
        'type',
        'status'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }

    public function assignee()
    {
        return $this->belongsTo('App\User', 'assignee');
    }

    public function subTasks()
    {
        return $this->hasMany('App\Task', 'subTasks');
    }

    public function parentTask()
    {
        return $this->belongsTo('App\Task', 'parentTask');
    }

    public function taskType()
    {
        return $this->hasOne('App\TaskType');
    }
}
