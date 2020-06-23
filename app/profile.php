<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public static $rules = array(
        'name' =>'required',
        'bestkicks' =>'required',
        'introduction' => 'required',
        );
}
