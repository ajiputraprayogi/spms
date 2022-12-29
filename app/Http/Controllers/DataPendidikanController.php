<?php

namespace App\Http\Controllers;

use App\Models\DataPendidikan;
use App\Models\DataDiri;
use Illuminate\Http\Request;

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
            $dataPendidikan = DataPendidikan::create([
                'fk' => $finalkode->fk,
                'user_id' => $request->user_id,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'asal_sekolah' => $request->asal_sekolah,
                'jurusan' => $request->jurusan,
                'nilai_akhir' => $request->nilai_akhir
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
