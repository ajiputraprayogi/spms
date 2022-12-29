<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataDiri
 *
 * @property $id
 * @property $user_id
 * @property $nama_lengkap
 * @property $tempat_lahir
 * @property $tgl_lahir
 * @property $alamat
 * @property $no_hp
 * @property $email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DataDiri extends Model
{
    protected $table = 'data_diri';
    
    public $timestamps = false;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk','user_id','nama_lengkap','tempat_lahir','tgl_lahir','alamat','no_hp','email'];



}
