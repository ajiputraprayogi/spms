<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UploadBerkas
 *
 * @property $id
 * @property $user_id
 * @property $surat_lamaran
 * @property $cv
 * @property $pengalaman_kerja
 * @property $portofolio
 * @property $ktp
 * @property $kk
 * @property $ijazah_terakhir
 * @property $transkrip_nilai
 * @property $skck
 * @property $foto
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UploadBerkas extends Model
{
    protected $table = 'upload_berkas';
    
    public $timestamps = false;
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk','user_id','surat_lamaran','cv','pengalaman_kerja','portofolio','ktp','kk','ijazah_terakhir','transkrip_nilai','skck','foto'];



}
