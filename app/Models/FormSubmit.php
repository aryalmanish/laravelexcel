<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmit extends Model
{
    use HasFactory;
    protected $table = 'form_submits';
    protected $fillable = ['name',
                'gender',
                'number',
                'email',
                'nationality',
                'dob',
                'education_background',
                'preferred_contact'
            ];
}
