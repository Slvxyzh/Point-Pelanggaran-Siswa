<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [         
        'nama', 'nipd', 'alamat', 'nohp','email','kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kelas_id','id');
    }
    
}
