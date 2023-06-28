<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class studentModel extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'password',
       
    ];
}
// Validator::make($input, [
//     'students' => 'array:name,email,password,password_confirm',
// ]);