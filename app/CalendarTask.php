<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarTask extends Model
{
    protected $fillable = ['name', 'description', 'task_date'];

}
