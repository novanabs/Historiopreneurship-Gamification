<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiTest extends Model
{
    use HasFactory;
    protected $table = 'nilaiTest';

    protected $fillable = [
        'email',
        'pre1',
        'post1',
        'pre2',
        'post2'
    ];
}
