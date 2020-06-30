<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'Mails';

    
    protected $fillable = [
        'nik','name','jns_surat',
        'keperluan','file','status'
    ];

    protected $hidden = [

    ];

    
}
