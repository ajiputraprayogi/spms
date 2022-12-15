<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Perusahaan
 *
 * @property $id
 * @property $kode
 * @property $nama
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    
    public $timestamps = false;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode','nama'];



}
