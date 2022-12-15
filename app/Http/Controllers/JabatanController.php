<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use DB;

/**
 * Class JabatanController
 * @package App\Http\Controllers
 */
class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $cari = $request->search;
            $perusahaan = DB::table('perusahaan')->get();
            $jabatans = Jabatan::where('nama','like',"%".$cari."%")
            ->paginate();
        }else{
            $perusahaan = DB::table('perusahaan')->get();
            $jabatans = Jabatan::paginate();
        }

        return view('jabatan.index', compact('jabatans','perusahaan'))
            ->with('i', (request()->input('page', 1) - 1) * $jabatans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = new Jabatan();

        $perusahaan = DB::table('perusahaan')->get();
        // dd($perusahaan);

        $fk = Jabatan::selectRaw("MAX(RIGHT(kode,3)) as kd_max");
        if($fk->count()>0){
            foreach($fk->get() as $fak){
                $tmp = ((int)$fak->kd_max)+1;
                $finalkode = sprintf("KODE".'%03s',$tmp);
            }
        }else{
            $finalkode = "KODE".$tgl."1";
        }
        return view('jabatan.create', compact('jabatan','perusahaan','finalkode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Jabatan::$rules);

        $jabatan = Jabatan::create($request->all());

        return redirect()->route('jabatan.index')
            ->with('success', 'Jabatan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::find($id);

        $perusahaan = DB::table('perusahaan')->get();

        return view('jabatan.show', compact('jabatan','perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);

        $perusahaan = DB::table('perusahaan')->get();

        $fk = Jabatan::selectRaw("MAX(RIGHT(kode,3)) as kd_max");
        if($fk->count()>0){
            foreach($fk->get() as $fak){
                $tmp = ((int)$fak->kd_max)+1;
                $finalkode = sprintf("KODE".'%03s',$tmp);
            }
        }else{
            $finalkode = "KODE".$tgl."1";
        }

        return view('jabatan.edit', compact('jabatan','perusahaan','finalkode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Jabatan $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(Jabatan::$rules);
        $jabatan = Jabatan::find($id);
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')
            ->with('success', 'Jabatan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id)->delete();

        return redirect()->route('jabatan.index')
            ->with('success', 'Jabatan deleted successfully');
    }
}
