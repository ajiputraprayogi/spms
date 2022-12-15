<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use DB;

/**
 * Class PerusahaanController
 * @package App\Http\Controllers
 */
class PerusahaanController extends Controller
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
            $perusahaans = Perusahaan::where('nama','like',"%".$cari."%")
            ->paginate();
        }else{
            $perusahaans = Perusahaan::paginate();
        }

        return view('perusahaan.index', compact('perusahaans'))
            ->with('i', (request()->input('page', 1) - 1) * $perusahaans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaan = new Perusahaan();
        $fk = Perusahaan::selectRaw("MAX(RIGHT(kode,3)) as kd_max");
        if($fk->count()>0){
            foreach($fk->get() as $fak){
                $tmp = ((int)$fak->kd_max)+1;
                $finalkode = sprintf("KODE".'%03s',$tmp);
            }
        }else{
            $finalkode = "KODE".$tgl."1";
        }
        return view('perusahaan.create', compact('perusahaan','finalkode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Perusahaan::$rules);

        $perusahaan = Perusahaan::create($request->all());

        return redirect()->route('perusahaan.index')
            ->with('success', 'Perusahaan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perusahaan = Perusahaan::find($id);

        return view('perusahaan.show', compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = Perusahaan::find($id);
        $fk = Perusahaan::selectRaw("MAX(RIGHT(kode,3)) as kd_max");
        if($fk->count()>0){
            foreach($fk->get() as $fak){
                $tmp = ((int)$fak->kd_max)+1;
                $finalkode = sprintf("KODE".'%03s',$tmp);
            }
        }else{
            $finalkode = "KODE".$tgl."1";
        }

        return view('perusahaan.edit', compact('perusahaan','finalkode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Perusahaan $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(Perusahaan::$rules);
        $perusahaan = Perusahaan::find($id);
        $perusahaan->update($request->all());

        return redirect()->route('perusahaan.index')
            ->with('success', 'Perusahaan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $perusahaan = Perusahaan::find($id)->delete();

        return redirect()->route('perusahaan.index')
            ->with('success', 'Perusahaan deleted successfully');
    }
}
