<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $table = 'kelompok';
    protected $primaryKey = 'id_tabel_kelompok';
    public $timestamps = false;
    protected $fillable = ['email', 'id_kelompok'];

    // Relasi one-to-many dengan model User (mahasiswa)
    public function users()
    {
        return $this->hasMany(Kelompok::class, 'id_kelompok', 'id_kelompok');
    }
}
