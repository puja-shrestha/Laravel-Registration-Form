<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public $fillable = ['name', 'gender', 'phoneno', 'email', 'address', 'nationality', 'dob', 'education_background', 'choose_preferred_contact'];
}
