<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefleksiKesejarahan extends Model
{
    use HasFactory;
    protected $table = 'refleksi_kesejarahan';
    protected $primaryKey = 'id_tabel_refleksi_kesejarahan';
    public $timestamps = false;

    protected $fillable = [
        'respon',
        'aspek',
        'jawaban',
        'created_by',
        'created_at',
    ];
}
