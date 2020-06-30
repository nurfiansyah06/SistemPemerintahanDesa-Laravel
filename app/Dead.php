<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dead extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'no_aktakematian';

    protected $fillable = [
        'no_aktakematian','tgl_kematian',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    
    public function user()
    {
        return $this->hasOne(User::class,'no_aktakematian_id','no_aktakematian');
    }

}
