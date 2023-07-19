<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    protected $fillable=[
        'guru_id', 'pelanggaran_id'
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }

    public function pelanggaran()
    {
        return $this->belongsTo(pelanggaran::class);
    }

    public function siswa()
    {
        return $this->belongsToMany(siswa::class, 'pelanggaran_siswa','laporan_id','siswa_id');
    }
}
