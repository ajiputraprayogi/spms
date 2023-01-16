<?php

namespace App\Http\Controllers;

use App\Models\DataPendidikan;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use DB;

/**
 * Class DataPendidikanController
 * @package App\Http\Controllers
 */
class DataPendidikanController extends Controller
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
            $dataPendidikans = DataPendidikan::paginate();
        }

        return view('data-pendidikan.index', compact('dataPendidikans'))
            ->with('i', (request()->input('page', 1) - 1) * $dataPendidikans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataPendidikan = new DataPendidikan();
        return view('data-pendidikan.create', compact('dataPendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DataPendidikan::$rules);

        if($request->user ==''){
            $dataPendidikan = DataPendidikan::create($request->all());
    
            return redirect()->route('data-pendidikan.index')
                ->with('success', 'DataPendidikan created successfully.');
        }else{
            $finalkode = DataDiri::where('user_id', $request->user_id)->first();

            // Berkas
            if(!$_FILES["sd_berkas"]["error"] == 4) {
                $nameland=$request->file('sd_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $sd_berkas=time().'-'.$replace_space;
                $destination=public_path('img/sd_berkas');
                $request->file('sd_berkas')->move($destination,$sd_berkas);
            }else{
                $sd_berkas = '';
            }

            if(!$_FILES["smp_berkas"]["error"] == 4) {
                $nameland=$request->file('smp_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $smp_berkas=time().'-'.$replace_space;
                $destination=public_path('img/smp_berkas');
                $request->file('smp_berkas')->move($destination,$smp_berkas);
            }else{
                $smp_berkas = '';
            }

            if(!$_FILES["sma_berkas"]["error"] == 4) {
                $nameland=$request->file('sma_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $sma_berkas=time().'-'.$replace_space;
                $destination=public_path('img/sma_berkas');
                $request->file('sma_berkas')->move($destination,$sma_berkas);
            }else{
                $sma_berkas = '';
            }

            if(!$_FILES["dsatu_berkas"]["error"] == 4) {
                $nameland=$request->file('dsatu_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $dsatu_berkas=time().'-'.$replace_space;
                $destination=public_path('img/dsatu_berkas');
                $request->file('dsatu_berkas')->move($destination,$dsatu_berkas);
            }else{
                $dsatu_berkas = '';
            }

            if(!$_FILES["ddua_berkas"]["error"] == 4) {
                $nameland=$request->file('ddua_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $ddua_berkas=time().'-'.$replace_space;
                $destination=public_path('img/ddua_berkas');
                $request->file('ddua_berkas')->move($destination,$ddua_berkas);
            }else{
                $ddua_berkas = '';
            }

            if(!$_FILES["dtiga_berkas"]["error"] == 4) {
                $nameland=$request->file('dtiga_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $dtiga_berkas=time().'-'.$replace_space;
                $destination=public_path('img/dtiga_berkas');
                $request->file('dtiga_berkas')->move($destination,$dtiga_berkas);
            }else{
                $dtiga_berkas = '';
            }

            if(!$_FILES["ssatu_berkas"]["error"] == 4) {
                $nameland=$request->file('ssatu_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $ssatu_berkas=time().'-'.$replace_space;
                $destination=public_path('img/ssatu_berkas');
                $request->file('ssatu_berkas')->move($destination,$ssatu_berkas);
            }else{
                $ssatu_berkas = '';
            }

            if(!$_FILES["sdua_berkas"]["error"] == 4) {
                $nameland=$request->file('sdua_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $sdua_berkas=time().'-'.$replace_space;
                $destination=public_path('img/sdua_berkas');
                $request->file('sdua_berkas')->move($destination,$sdua_berkas);
            }else{
                $sdua_berkas = '';
            }

            if(!$_FILES["stiga_berkas"]["error"] == 4) {
                $nameland=$request->file('stiga_berkas')->getClientOriginalname();
                $lower_file_name=strtolower($nameland);
                $replace_space=str_replace(' ', '-', $lower_file_name);
                $stiga_berkas=time().'-'.$replace_space;
                $destination=public_path('img/stiga_berkas');
                $request->file('stiga_berkas')->move($destination,$stiga_berkas);
            }else{
                $stiga_berkas = '';
            }

            if(empty($request->bahasa_asing)){
                $newbahasaasing = '';
            }else{
                $bahasaasing = [];
                for($i=0; $i < count($request->bahasa_asing); $i++){
                    if(empty($request->bahasa_asing)){
                        $bahasaasing = '';
                    }else{
                        array_push($bahasaasing, $request->bahasa_asing[$i] . ' Level ' . $request->level_bahasa_asing[$i]);
                    }
                }
                $newbahasaasing = implode(',', $bahasaasing);
            }

            $dataPendidikan = DB::table('data_pendidikan')->insert([
                'fk' => $finalkode->fk,
                'user_id' => $request->user_id,
                'sd' => $request->sd,
                'sd_tahun_lulus' => $request->sd_tahun_lulus,
                'sd_nilai_akhir' => $request->sd_nilai_akhir,
                'sd_berkas' => $sd_berkas,
                'smp' => $request->smp,
                'smp_tahun_lulus' => $request->smp_tahun_lulus,
                'smp_nilai_akhir' => $request->smp_nilai_akhir,
                'smp_berkas' => $smp_berkas,
                'sma' => $request->sma,
                'sma_jurusan' => $request->sma_jurusan,
                'sma_tahun_lulus' => $request->sma_tahun_lulus,
                'sma_nilai_akhir' => $request->sma_nilai_akhir,
                'sma_berkas' => $sma_berkas,
                'dsatu' => $request->dsatu,
                'dsatu_jurusan' => $request->dsatu_jurusan,
                'dsatu_tahun_lulus' => $request->dsatu_tahun_lulus,
                'dsatu_nilai_akhir' => $request->dsatu_nilai_akhir,
                'dsatu_berkas' => $dsatu_berkas,
                'ddua' => $request->ddua,
                'ddua_jurusan' => $request->ddua_jurusan,
                'ddua_tahun_lulus' => $request->ddua_tahun_lulus,
                'ddua_nilai_akhir' => $request->ddua_nilai_akhir,
                'ddua_berkas' => $ddua_berkas,
                'dtiga' => $request->dtiga,
                'dtiga_jurusan' => $request->dtiga_jurusan,
                'dtiga_tahun_lulus' => $request->dtiga_tahun_lulus,
                'dtiga_nilai_akhir' => $request->dtiga_nilai_akhir,
                'dtiga_berkas' => $dtiga_berkas,
                'ssatu' => $request->ssatu,
                'ssatu_jurusan' => $request->ssatu_jurusan,
                'ssatu_tahun_lulus' => $request->ssatu_tahun_lulus,
                'ssatu_nilai_akhir' => $request->ssatu_nilai_akhir,
                'ssatu_berkas' => $ssatu_berkas,
                'sdua' => $request->sdua,
                'sdua_jurusan' => $request->sdua_jurusan,
                'sdua_tahun_lulus' => $request->sdua_tahun_lulus,
                'sdua_nilai_akhir' => $request->sdua_nilai_akhir,
                'sdua_berkas' => $sdua_berkas,
                'stiga' => $request->stiga,
                'stiga_jurusan' => $request->stiga_jurusan,
                'stiga_tahun_lulus' => $request->stiga_tahun_lulus,
                'stiga_nilai_akhir' => $request->stiga_nilai_akhir,
                'stiga_berkas' => $stiga_berkas,
                'bahasa_asing' => $newbahasaasing
            ]);
            for($i=0; $i < count($request->nonakademik_satu); $i++){
                if(empty($request->nonakademik_berkas[$i])){
                    $nonakademikberkas = '';
                }else{
                    $nonakademikberkas = $request->nonakademik_berkas[$i];
                    if(!$_FILES["nonakademik_berkas"]["error"][$i] == 4) {
                        $nameland=$request->file('nonakademik_berkas')[$i]->getClientOriginalname();
                        $lower_file_name=strtolower($nameland);
                        $replace_space=str_replace(' ', '-', $lower_file_name);
                        $nonakademik_berkas=time().'-'.$replace_space;
                        $destination=public_path('img/nonakademik_berkas');
                        $request->file('nonakademik_berkas')[$i]->move($destination,$nonakademik_berkas);
                    }else{
                        $nonakademik_berkas = '';
                    }

                    DB::table('nonakademik')->insert([
                        'fk' => $finalkode->fk,
                        'user_id' => $request->user_id,
                        'nonakademik_satu' => $request->nonakademik_satu[$i],
                        'nonakademik_dua' => $request->nonakademik_dua[$i],
                        'nonakademik_tiga' => $request->nonakademik_tiga[$i],
                        'nonakademik_level' => $request->nonakademik_level[$i],
                        'nonakademik_berkas' => $nonakademik_berkas
                    ]);
                }
            }
            for($j=0; $j < count($request->nama_perusahaan); $j++){
                if(empty($request->pengalaman_berkas[$j])){
                    $pengalamanberkas = '';
                }else{
                    $pengalamanberkas = $request->pengalaman_berkas[$j];
                    if(!$_FILES["pengalaman_berkas"]["error"][$j] == 4) {
                        $nameland=$request->file('pengalaman_berkas')[$j]->getClientOriginalname();
                        $lower_file_name=strtolower($nameland);
                        $replace_space=str_replace(' ', '-', $lower_file_name);
                        $pengalaman_berkas=time().'-'.$replace_space;
                        $destination=public_path('img/pengalaman_berkas');
                        $request->file('pengalaman_berkas')[$j]->move($destination,$pengalaman_berkas);
                    }else{
                        $pengalaman_berkas = '';
                    }
                    DB::table('pengalaman_kerja')->insert([
                        'fk' => $finalkode->fk,
                        'user_id' => $request->user_id,
                        'nama_perusahaan' => $request->nama_perusahaan[$j],
                        'jabatan' => $request->jabatan[$j],
                        'lama_bekerja' => $request->lama_bekerja[$j],
                        'tahun' => $request->tahun[$j],
                        'pengalaman_berkas' => $pengalaman_berkas
                    ]);
                }
            }

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
        $dataPendidikan = DataPendidikan::find($id);

        return view('data-pendidikan.show', compact('dataPendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataPendidikan = DataPendidikan::find($id);

        return view('data-pendidikan.edit', compact('dataPendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DataPendidikan $dataPendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(DataPendidikan::$rules);
        $dataPendidikan = DataPendidikan::find($id);
        $dataPendidikan->update($request->all());

        return redirect()->route('data-pendidikan.index')
            ->with('success', 'DataPendidikan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dataPendidikan = DataPendidikan::find($id)->delete();

        return redirect()->route('data-pendidikan.index')
            ->with('success', 'DataPendidikan deleted successfully');
    }
}
