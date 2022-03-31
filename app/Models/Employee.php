<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['fname',
    'lname',
    'joining_date',
    'dob',
    'designation_id',
    'gender',
    'mobile_no',
    'landline',
    'email',
    'precent_addrress',
    'premenet_address' ,
    'status',
    'resume'];
}
