<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateModel extends Model
{
    
    use HasFactory;
    use SoftDeletes;
    protected $table = 'candidates';
    // protected $primaryKey='id';
    protected $fillable = [
        'name',
        'email',
        'address',
        'country',
        'state',
    ];
}
