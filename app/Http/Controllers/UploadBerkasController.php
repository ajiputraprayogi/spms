<?php

namespace App\Http\Controllers;

use App\Models\UploadBerkas;
use App\Models\DataDiri;
use Illuminate\Http\Request;

/**
 * Class UploadBerkaController
 * @package App\Http\Controllers
 */
class UploadBerkasController extends Controller
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
            $uploadBerkass = UploadBerkas::paginate();
        }

        return view('upload-berkas.index', compact('uploadBerkass'))
            ->with('i', (request()->input('page', 1) - 1) * $uploadBerkass->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uploadBerkas = new UploadBerkas();
        return view('upload-berkas.create', compact('uploadBerkas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UploadBerkas::$rules);

        if($request->user==''){
            $uploadBerkas = UploadBerkas::create($request->all());
    
            return redirect()->route('upload-berkas.index')
                ->with('success', 'UploadBerkas created successfully.');
        }else{
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
    
            // if(!$_FILES["ijazah_terakhir"]["error"] == 4) {
            //     $nameland7=$request->file('ijazah_terakhir')->getClientOriginalname();
            //     $lower_file_name7=strtolower($nameland7);
            //     $replace_space7=str_replace(' ', '-', $lower_file_name7);
            //     $ijazah_terakhir=time().'-'.$replace_space7;
            //     $destination7=public_path('img/ijazah_terakhir');
            //     $request->file('ijazah_terakhir')->move($destination7,$ijazah_terakhir);
            // }else{
            //     $ijazah_terakhir = '';
            // }
    
            // if(!$_FILES["transkrip_nilai"]["error"] == 4) {
            //     $nameland8=$request->file('transkrip_nilai')->getClientOriginalname();
            //     $lower_file_name8=strtolower($nameland8);
            //     $replace_space8=str_replace(' ', '-', $lower_file_name8);
            //     $transkrip_nilai=time().'-'.$replace_space8;
            //     $destination8=public_path('img/transkrip_nilai');
            //     $request->file('transkrip_nilai')->move($destination8,$transkrip_nilai);
            // }else{
            //     $transkrip_nilai = '';
            // }
    
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

            $finalkode = DataDiri::where('user_id', $request->user_id)->first();
            $dataBerkas = UploadBerkas::create([
                'fk' => $finalkode->fk,
                'user_id' => $request->user_id,
                'surat_lamaran' => $surat_lamaran,
                'cv' => $cv,
                'pengalaman_kerja' => $pengalaman_kerja,
                'portofolio' => $portofolio,
                'ktp' => $ktp,
                'kk' => $kk,
                // 'ijazah_terakhir' => $ijazah_terakhir,
                // 'transkrip_nilai' => $transkrip_nilai,
                'skck' => $skck,
                'foto' => $foto
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
        $uploadBerkas = UploadBerkas::find($id);

        return view('upload-berkas.show', compact('uploadBerkas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uploadBerkas = UploadBerkas::find($id);

        return view('upload-berkas.edit', compact('uploadBerkas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UploadBerkas $uploadBerkas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(UploadBerkas::$rules);
        $uploadBerkas = UploadBerkas::find($id);
        $uploadBerkas->update($request->all());

        return redirect()->route('upload-berkas.index')
            ->with('success', 'UploadBerkas updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $uploadBerkas = UploadBerkas::find($id)->delete();

        return redirect()->route('upload-berkas.index')
            ->with('success', 'UploadBerkas deleted successfully');
    }
}
