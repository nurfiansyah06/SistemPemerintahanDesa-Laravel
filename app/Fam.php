<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fam extends Model
{
  


    protected $table = 'fams';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'no_kk';
    
    protected $fillable = [
        'nik_id','no_kk','kepala_keluarga','jabatan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function users()
    {
        return $this->hasMany(User::class,'no_kk_id','no_kk');
    }
}
