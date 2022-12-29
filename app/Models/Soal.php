<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Soal
 *
 * @property $id
 * @property $jenis_soal
 * @property $jumlah_soal
 * @property $status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Soal extends Model
{
    protected $table = 'soal';
    
    public $timestamps = false;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jenis_soal','jumlah_soal_abc','jumlah_soal_yt','status','minimal_score','soal','tipe_soal','a','b','c','d','jawaban'];



}
