<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    protected $table = 'moves';

    
    protected $fillable = [
        'nik','no_kk','no_migrasi','name','tgl_pindah',
        'alamat_asli','alamat_pindah','status'
    ];

    protected $hidden = [

    ];

    
}
