<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'contact';
    public  $fillable = [
    	'FirstName','LastName','phone','Email','Message'
    ];
}
