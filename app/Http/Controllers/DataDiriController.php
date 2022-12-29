<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\User;
use App\Models\DataPendidikan;
use App\Models\UploadBerkas;
use Illuminate\Http\Request;
use File;

/**
 * Class DataDiriController
 * @package App\Http\Controllers
 */
class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            dd('search result');
        }else{
            $dataDiris = DataDiri::paginate();
        }

        return view('data-diri.index', compact('dataDiris'))
            ->with('i', (request()->input('page', 1) - 1) * $dataDiris->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataDiri = new DataDiri();
        $users = User::all();
        $fk = DataDiri::selectRaw("MAX(RIGHT(fk,3)) as kd_max");
        if($fk->count()>0){
            foreach($fk->get() as $fak){
                $tmp = ((int)$fak->kd_max)+1;
                $finalkode = sprintf("FK".'%03s',$tmp);
            }
        }else{
            $finalkode = "FK"."001";
        }
        return view('data-diri.create', compact('dataDiri','users','finalkode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DataDiri::$rules);

        if($request->user ==''){
            dd($request);
            $dataDiri = DataDiri::create([
                'fk' => $request->fk,
                'user_id' => $request->user_id,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'email' => $request->email
            ]);
    
            $dataPendidikan = DataPendidikan::create([
                'fk' => $request->fk,
                'user_id' => $request->user_id,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'asal_sekolah' => $request->asal_sekolah,
                'jurusan' => $request->jurusan,
                'nilai_akhir' => $request->nilai_akhir
            ]);
    
            if(!$_FILES["surat_lamaran"]["error"] == 4) {
                $nameland=$request->file('surat_lamaran')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $surat_lamaran=time().'-'.$replace_space;
                $destination=public_path('img/surat_lamaran');
                $request->file('surat_lamaran')->move($destination,$surat_lamaran);
            }else{
                $surat_lamaran = '';
            }
    
            if(!$_FILES["cv"]["error"] == 4) {
                $nameland2=$request->file('cv')->getClientOriginalname();
                $lower_file_name2=strtolower($nameland2);
                $replace_space2=str_replace(' ', '-', $lower_file_name2);
                $cv=time().'-'.$replace_space2;
                $destination2=public_path('img/cv');
                $request->file('cv')->move($destination2,$cv);
            }else{
                $cv = '';
            }
    
            if(!$_FILES["pengalaman_kerja"]["error"] == 4) {
                $nameland3=$request->file('pengalaman_kerja')->getClientOriginalname();
                $lower_file_name3=strtolower($nameland3);
                $replace_space3=str_replace(' ', '-', $lower_file_name3);
                $pengalaman_kerja=time().'-'.$replace_space3;
                $destination3=public_path('img/pengalaman_kerja');
                $request->file('pengalaman_kerja')->move($destination3,$pengalaman_kerja);
            }else{
                $pengalaman_kerja = '';
            }
    
            if(!$_FILES["portofolio"]["error"] == 4) {
                $nameland4=$request->file('portofolio')->getClientOriginalname();
                $lower_file_name4=strtolower($nameland4);
                $replace_space4=str_replace(' ', '-', $lower_file_name4);
                $portofolio=time().'-'.$replace_space4;
                $destination4=public_path('img/portofolio');
                $request->file('portofolio')->move($destination4,$portofolio);
            }else{
                $portofolio = '';
            }
    
            if(!$_FILES["ktp"]["error"] == 4) {
                $nameland5=$request->file('ktp')->getClientOriginalname();
                $lower_file_name5=strtolower($nameland5);
                $replace_space5=str_replace(' ', '-', $lower_file_name5);
                $ktp=time().'-'.$replace_space5;
                $destination5=public_path('img/ktp');
                $request->file('ktp')->move($destination5,$ktp);
            }else{
                $ktp = '';
            }
    
            if(!$_FILES["kk"]["error"] == 4) {
                $nameland6=$request->file('kk')->getClientOriginalname();
                $lower_file_name6=strtolower($nameland6);
                $replace_space6=str_replace(' ', '-', $lower_file_name6);
                $kk=time().'-'.$replace_space6;
                $destination6=public_path('img/kk');
                $request->file('kk')->move($destination6,$kk);
            }else{
                $kk = '';
            }
    
            if(!$_FILES["ijazah_terakhir"]["error"] == 4) {
                $nameland7=$request->file('ijazah_terakhir')->getClientOriginalname();
                $lower_file_name7=strtolower($nameland7);
                $replace_space7=str_replace(' ', '-', $lower_file_name7);
                $ijazah_terakhir=time().'-'.$replace_space7;
                $destination7=public_path('img/ijazah_terakhir');
                $request->file('ijazah_terakhir')->move($destination7,$ijazah_terakhir);
            }else{
                $ijazah_terakhir = '';
            }
    
            if(!$_FILES["transkrip_nilai"]["error"] == 4) {
                $nameland8=$request->file('transkrip_nilai')->getClientOriginalname();
                $lower_file_name8=strtolower($nameland8);
                $replace_space8=str_replace(' ', '-', $lower_file_name8);
                $transkrip_nilai=time().'-'.$replace_space8;
                $destination8=public_path('img/transkrip_nilai');
                $request->file('transkrip_nilai')->move($destination8,$transkrip_nilai);
            }else{
                $transkrip_nilai = '';
            }
    
            if(!$_FILES["skck"]["error"] == 4) {
                $nameland9=$request->file('skck')->getClientOriginalname();
                $lower_file_name9=strtolower($nameland9);
                $replace_space9=str_replace(' ', '-', $lower_file_name9);
                $skck=time().'-'.$replace_space9;
                $destination9=public_path('img/skck');
                $request->file('skck')->move($destination9,$skck);
            }else{
                $skck = '';
            }
    
            if(!$_FILES["foto"]["error"] == 4) {
                $nameland10=$request->file('foto')->getClientOriginalname();
                $lower_file_name10=strtolower($nameland10);
                $replace_space10=str_replace(' ', '-', $lower_file_name10);
                $foto=time().'-'.$replace_space10;
                $destination10=public_path('img/foto');
                $request->file('foto')->move($destination10,$foto);
            }else{
                $foto = '';
            }
            $dataBerkas = UploadBerkas::create([
                'fk' => $request->fk,
                'user_id' => $request->user_id,
                'surat_lamaran' => $surat_lamaran,
                'cv' => $cv,
                'pengalaman_kerja' => $pengalaman_kerja,
                'portofolio' => $portofolio,
                'ktp' => $ktp,
                'kk' => $kk,
                'ijazah_terakhir' => $ijazah_terakhir,
                'transkrip_nilai' => $transkrip_nilai,
                'skck' => $skck,
                'foto' => $foto
            ]);
    
            return redirect()->route('data-diri.index')
                ->with('success', 'Data Pelamar created successfully.');
        }else{
            $fk = DataDiri::selectRaw("MAX(RIGHT(fk,3)) as kd_max");
            if($fk->count()>0){
                foreach($fk->get() as $fak){
                    $tmp = ((int)$fak->kd_max)+1;
                    $finalkode = sprintf("FK".'%03s',$tmp);
                }
            }else{
                $finalkode = "FK"."001";
            }
            $dataDiri = DataDiri::create([
                'fk' => $finalkode,
                'user_id' => $request->user_id,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'email' => $request->email
            ]);

            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataDiri = DataDiri::leftjoin('data_pendidikan', function($join){
            $join->on('data_diri.fk','=','data_pendidikan.fk');
        })->leftjoin('upload_berkas', function($join){
            $join->on('data_diri.fk','=','upload_berkas.fk');
        })
        ->where('data_diri.id', $id)->first([
            'data_diri.*','data_diri.id as idd',
            'data_pendidikan.*',
            'upload_berkas.*'
        ]);

        return view('data-diri.show', compact('dataDiri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataDiri = DataDiri::leftjoin('data_pendidikan', function($join){
            $join->on('data_diri.fk','=','data_pendidikan.fk');
        })->leftjoin('upload_berkas', function($join){
            $join->on('data_diri.fk','=','upload_berkas.fk');
        })
        ->where('data_diri.id', $id)->first([
            'data_diri.*','data_diri.id as idd',
            'data_pendidikan.*',
            'upload_berkas.*'
        ]);

        $users = User::all();

        return view('data-diri.edit', compact('dataDiri','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DataDiri $dataDiri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(DataDiri::$rules);
        $dataDiri = DataDiri::where('fk', $request->fk)->first();
        $dataDiri->update([
            'user_id' => $request->user_id,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);
        $dataPendidikan = DataPendidikan::where('fk', $request->fk)->first();
        $dataPendidikan->update([
            'user_id' => $request->user_id,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'asal_sekolah' => $request->asal_sekolah,
            'jurusan' => $request->jurusan,
            'nilai_akhir' => $request->nilai_akhir
        ]);

        if(!$_FILES["surat_lamaran"]["error"] == 4) {
            File::delete('img/surat_lamaran/'.$request->surat_lamaran_old);
            $nameland=$request->file('surat_lamaran')->getClientOriginalname();
            $lower_file_name=strtolower($nameland);
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $surat_lamaran=time().'-'.$replace_space;
            $destination=public_path('img/surat_lamaran');
            $request->file('surat_lamaran')->move($destination,$surat_lamaran);
        }else{
            $surat_lamaran = $request->surat_lamaran_old;
        }

        if(!$_FILES["cv"]["error"] == 4) {
            File::delete('img/cv/'.$request->cv_old);
            $nameland2=$request->file('cv')->getClientOriginalname();
            $lower_file_name2=strtolower($nameland2);
            $replace_space2=str_replace(' ', '-', $lower_file_name2);
            $cv=time().'-'.$replace_space2;
            $destination2=public_path('img/cv');
            $request->file('cv')->move($destination2,$cv);
        }else{
            $cv = $request->cv_old;
        }

        if(!$_FILES["pengalaman_kerja"]["error"] == 4) {
            File::delete('img/pengalaman_kerja/'.$request->pengalaman_kerja_old);
            $nameland3=$request->file('pengalaman_kerja')->getClientOriginalname();
            $lower_file_name3=strtolower($nameland3);
            $replace_space3=str_replace(' ', '-', $lower_file_name3);
            $pengalaman_kerja=time().'-'.$replace_space3;
            $destination3=public_path('img/pengalaman_kerja');
            $request->file('pengalaman_kerja')->move($destination3,$pengalaman_kerja);
        }else{
            $pengalaman_kerja = $request->pengalaman_kerja_old;
        }

        if(!$_FILES["portofolio"]["error"] == 4) {
            File::delete('img/portofolio/'.$request->portofolio_old);
            $nameland4=$request->file('portofolio')->getClientOriginalname();
            $lower_file_name4=strtolower($nameland4);
            $replace_space4=str_replace(' ', '-', $lower_file_name4);
            $portofolio=time().'-'.$replace_space4;
            $destination4=public_path('img/portofolio');
            $request->file('portofolio')->move($destination4,$portofolio);
        }else{
            $portofolio = $request->portofolio_old;
        }

        if(!$_FILES["ktp"]["error"] == 4) {
            File::delete('img/ktp/'.$request->ktp_old);
            $nameland5=$request->file('ktp')->getClientOriginalname();
            $lower_file_name5=strtolower($nameland5);
            $replace_space5=str_replace(' ', '-', $lower_file_name5);
            $ktp=time().'-'.$replace_space5;
            $destination5=public_path('img/ktp');
            $request->file('ktp')->move($destination5,$ktp);
        }else{
            $ktp = $request->ktp_old;
        }

        if(!$_FILES["kk"]["error"] == 4) {
            File::delete('img/kk/'.$request->kk_old);
            $nameland6=$request->file('kk')->getClientOriginalname();
            $lower_file_name6=strtolower($nameland6);
            $replace_space6=str_replace(' ', '-', $lower_file_name6);
            $kk=time().'-'.$replace_space6;
            $destination6=public_path('img/kk');
            $request->file('kk')->move($destination6,$kk);
        }else{
            $kk = $request->kk_old;
        }

        if(!$_FILES["ijazah_terakhir"]["error"] == 4) {
            File::delete('img/ijazah_terakhir/'.$request->ijazah_terakhir_old);
            $nameland7=$request->file('ijazah_terakhir')->getClientOriginalname();
            $lower_file_name7=strtolower($nameland7);
            $replace_space7=str_replace(' ', '-', $lower_file_name7);
            $ijazah_terakhir=time().'-'.$replace_space7;
            $destination7=public_path('img/ijazah_terakhir');
            $request->file('ijazah_terakhir')->move($destination7,$ijazah_terakhir);
        }else{
            $ijazah_terakhir = $request->ijazah_terakhir_old;
        }

        if(!$_FILES["transkrip_nilai"]["error"] == 4) {
            File::delete('img/transkrip_nilai/'.$request->transkrip_nilai_old);
            $nameland8=$request->file('transkrip_nilai')->getClientOriginalname();
            $lower_file_name8=strtolower($nameland8);
            $replace_space8=str_replace(' ', '-', $lower_file_name8);
            $transkrip_nilai=time().'-'.$replace_space8;
            $destination8=public_path('img/transkrip_nilai');
            $request->file('transkrip_nilai')->move($destination8,$transkrip_nilai);
        }else{
            $transkrip_nilai = $request->transkrip_nilai_old;
        }

        if(!$_FILES["skck"]["error"] == 4) {
            File::delete('img/skck/'.$request->skck_old);
            $nameland9=$request->file('skck')->getClientOriginalname();
            $lower_file_name9=strtolower($nameland9);
            $replace_space9=str_replace(' ', '-', $lower_file_name9);
            $skck=time().'-'.$replace_space9;
            $destination9=public_path('img/skck');
            $request->file('skck')->move($destination9,$skck);
        }else{
            $skck = $request->skck_old;
        }

        if(!$_FILES["foto"]["error"] == 4) {
            File::delete('img/foto/'.$request->foto_old);
            $nameland10=$request->file('foto')->getClientOriginalname();
            $lower_file_name10=strtolower($nameland10);
            $replace_space10=str_replace(' ', '-', $lower_file_name10);
            $foto=time().'-'.$replace_space10;
            $destination10=public_path('img/foto');
            $request->file('foto')->move($destination10,$foto);
        }else{
            $foto = $request->foto_old;
        }
        
        $dataBerkas = UploadBerkas::where('fk', $request->fk)->first();
        $dataBerkas->update([
            'user_id' => $request->user_id,
            'surat_lamaran' => $surat_lamaran,
            'cv' => $cv,
            'pengalaman_kerja' => $pengalaman_kerja,
            'portofolio' => $portofolio,
            'ktp' => $ktp,
            'kk' => $kk,
            'ijazah_terakhir' => $ijazah_terakhir,
            'transkrip_nilai' => $transkrip_nilai,
            'skck' => $skck,
            'foto' => $foto
        ]);

        return redirect()->route('data-diri.index')
            ->with('success', 'Data Pelamar updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dataDiri = DataDiri::find($id);
        $fk = $dataDiri->fk;
        $dataPendidikan = DataPendidikan::where('fk', $fk)->first();
        $dataBerkas = UploadBerkas::where('fk', $fk)->first();
        File::delete('img/surat_lamaran/'.$dataDiri->surat_lamaran);
        File::delete('img/cv/'.$dataDiri->cv);
        File::delete('img/pengalaman_kerja/'.$dataDiri->pengalaman_kerja);
        File::delete('img/portofolio/'.$dataDiri->portofolio);
        File::delete('img/ktp/'.$dataDiri->ktp);
        File::delete('img/kk/'.$dataDiri->kk);
        File::delete('img/ijazah_terakhir/'.$dataDiri->ijazah_terakhir);
        File::delete('img/transkrip_nilai/'.$dataDiri->transkrip_nilai);
        File::delete('img/skck/'.$dataDiri->skck);
        File::delete('img/foto/'.$dataDiri->foto);
        $dataPendidikan->delete();
        $dataBerkas->delete();
        $dataDiri->delete();


        return redirect()->route('data-diri.index')
            ->with('success', 'Data Pelamar deleted successfully');
    }
}
