<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'nik';

    protected $fillable = [
        'name', 'nik','no_kk_id','email', 'password','no_aktalahir','no_aktakematian','tgl_lahir',
        'tmpt_lahir','agama','jns_kelamin','jns_pekerjaan','status_kawin','alamat',
        'status_migrasi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    
    public function fam()
    {
        return $this->BelongsTo(Fam::class, 'no_kk_id','no_kk');
    }
    
    public function birth()
    {
        return $this->BelongsTo(Birth::class,'no_aktalahir_id','no_aktalahir');
    }

    public function dead()
    {
        return $this->BelongsTo(Dead::class,'no_aktakematian_id','no_aktalahir');
    }

}
