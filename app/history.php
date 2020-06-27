<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'bland' => 'required',
        'date' => 'required',
        'image_path' => 'required',
        'comment' =>'required',
        
    );
}
