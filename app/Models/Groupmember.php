<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupmember extends Model
{
    use HasFactory;
    protected $fillable=[
    	'staff',
    	'customers',
    	'count'

];
}
