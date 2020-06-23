<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name2' => 'required',
        'bland' => 'required',
        'date' => 'required',
        'image_path' => 'required',
    );
}
