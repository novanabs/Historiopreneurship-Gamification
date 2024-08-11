<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisKelompokKesejarahan extends Model
{
    use HasFactory;

    protected $table = 'analisis_kelompok_kesejarahan';
    protected $primaryKey = 'id_tabel_kelompok';
    public $timestamps = false; // Nonaktifkan penggunaan timestamps
    protected $fillable = ['no_objek','jawaban', 'created_at', 'created_by','id_kelompok'];

}

