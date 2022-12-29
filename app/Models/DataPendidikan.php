<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataPendidikan
 *
 * @property $id
 * @property $user_id
 * @property $pendidikan_terakhir
 * @property $asal_sekolah
 * @property $jurusan
 * @property $nilai_akhir
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DataPendidikan extends Model
{
    protected $table = 'data_pendidikan';
    
    public $timestamps = false;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk','user_id','pendidikan_terakhir','asal_sekolah','jurusan','nilai_akhir'];



}
