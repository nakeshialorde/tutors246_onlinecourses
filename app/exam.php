<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    //Table name
    protected $table = 'Question';
    //Primary Key
    public $primarykey ='id';
    //Time Stamp
    public $timestamps = true;
}
