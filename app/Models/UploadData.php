<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadData extends Model
{
    use HasFactory;

    protected $table = 'upload_data';

    protected $fillable = [
        
        'name',
        'father_name',
        'age',
        'sex',
        'created_by',
    ];
}