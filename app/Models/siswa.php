<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [         
        'nama', 'nisn', 'jeniskelamin', 'alamat', 'nohp','point','email','kelas_id','jurusan_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kelas_id','id');
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class,'jurusan_id','id');
    }

    public function laporan()
    {
        return $this->belongsToMany(laporan::class, 'pelanggaran_siswa', 'siswa_id', 'laporan_id');
    }
}
