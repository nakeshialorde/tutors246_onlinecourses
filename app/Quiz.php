<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table='quiz';
    public $primarykey='id';
    public $timestamps=true;
}
