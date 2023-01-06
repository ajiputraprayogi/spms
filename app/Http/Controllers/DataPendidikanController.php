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
            $dataPendidikan = DB::table('data_pendidikan')->insert([
                'fk' => $finalkode->fk,
                'user_id' => $request->user_id,
                'sd' => $request->sd,
                'sd_tahun_lulus' => $request->sd_tahun_lulus,
                'sd_nilai_akhir' => $request->sd_nilai_akhir,
                'sd_berkas' => $request->sd_berkas,
                'smp' => $request->smp,
                'smp_tahun_lulus' => $request->smp_tahun_lulus,
                'smp_nilai_akhir' => $request->smp_nilai_akhir,
                'smp_berkas' => $request->smp_berkas,
                'sma' => $request->sma,
                'sma_jurusan' => $request->sma_jurusan,
                'sma_tahun_lulus' => $request->sma_tahun_lulus,
                'sma_nilai_akhir' => $request->sma_nilai_akhir,
                'sma_berkas' => $request->sma_berkas,
                'dsatu' => $request->dsatu,
                'dsatu_jurusan' => $request->dsatu_jurusan,
                'dsatu_tahun_lulus' => $request->dsatu_tahun_lulus,
                'dsatu_nilai_akhir' => $request->dsatu_nilai_akhir,
                'dsatu_berkas' => $request->dsatu_berkas,
                'ddua' => $request->ddua,
                'ddua_jurusan' => $request->ddua_jurusan,
                'ddua_tahun_lulus' => $request->ddua_tahun_lulus,
                'ddua_nilai_akhir' => $request->ddua_nilai_akhir,
                'ddua_berkas' => $request->ddua_berkas,
                'dtiga' => $request->dtiga,
                'dtiga_jurusan' => $request->dtiga_jurusan,
                'dtiga_tahun_lulus' => $request->dtiga_tahun_lulus,
                'dtiga_nilai_akhir' => $request->dtiga_nilai_akhir,
                'dtiga_berkas' => $request->dtiga_berkas,
                'ssatu' => $request->ssatu,
                'ssatu_jurusan' => $request->ssatu_jurusan,
                'ssatu_tahun_lulus' => $request->ssatu_tahun_lulus,
                'ssatu_nilai_akhir' => $request->ssatu_nilai_akhir,
                'ssatu_berkas' => $request->ssatu_berkas,
                'sdua' => $request->sdua,
                'sdua_jurusan' => $request->sdua_jurusan,
                'sdua_tahun_lulus' => $request->sdua_tahun_lulus,
                'sdua_nilai_akhir' => $request->sdua_nilai_akhir,
                'sdua_berkas' => $request->sdua_berkas,
                'stiga' => $request->stiga,
                'stiga_jurusan' => $request->stiga_jurusan,
                'stiga_tahun_lulus' => $request->stiga_tahun_lulus,
                'stiga_nilai_akhir' => $request->stiga_nilai_akhir,
                'stiga_berkas' => $request->stiga_berkas,
                'bahasa_asing' => $request->bahasa_asing
            ]);
            for($i=0; $i < count($request->nonakademik_satu); $i++){
                if(empty($request->nonakademik_berkas)){
                    $nonakademikberkas = '';
                }else{
                    $nonakademikberkas = $request->nonakademik_berkas[$i];
                }
                DB::table('nonakademik')->insert([
                    'fk' => $finalkode->fk,
                    'user_id' => $request->user_id,
                    'nonakademik_satu' => $request->nonakademik_satu[$i],
                    'nonakademik_dua' => $request->nonakademik_dua[$i],
                    'nonakademik_tiga' => $request->nonakademik_tiga[$i],
                    'nonakademik_berkas' => $nonakademikberkas
                ]);
            }
            for($j=0; $j < count($request->nama_perusahaan); $j++){
                if(empty($request->pengalaman_berkas)){
                    $pengalamanberkas = '';
                }else{
                    $pengalamanberkas = $request->pengalaman_berkas[$j];
                }
                DB::table('pengalaman_kerja')->insert([
                    'fk' => $finalkode->fk,
                    'user_id' => $request->user_id,
                    'nama_perusahaan' => $request->nama_perusahaan[$j],
                    'jabatan' => $request->jabatan[$j],
                    'lama_bekerja' => $request->lama_bekerja[$j],
                    'tahun' => $request->tahun[$j],
                    'pengalaman_berkas' => $pengalamanberkas
                ]);
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
