<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'no_aktalahir';

    protected $fillable = [
        'no_aktalahir','tgl_lahir','tmpt_lahir',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    
    public function fam()
    {
        return $this->BelongsTo(Fam::class, 'no_kk_id');
    }
    
    public function user()
    {
        return $this->hasOne(User::class,'no_aktalahir_id','no_aktalahir');
    }

}
