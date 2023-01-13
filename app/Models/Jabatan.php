<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jabatan
 *
 * @property $id
 * @property $kode
 * @property $nama
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jabatan extends Model
{
    protected $table = 'jabatan';
    
    public $timestamps = false;
    
    static $rules = [
    'id_perusahaan' => 'required',
		'kode' => 'required',
		'nama' => 'required',
    'minimal_pendidikan' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_perusahaan','kode','nama','minimal_pendidikan'];



}
