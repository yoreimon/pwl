<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_matkul',
        'sks',
    ];

    public function mahasiswa(){
        return $this->belongsToMany(MahasiswaModel::class, 'mahasiswa_matakuliah', 'matakuliah_id', 'mahasiswa_id')->withPivot('nilai');
    }
}