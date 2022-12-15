<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

/**
 * Class SoalController
 * @package App\Http\Controllers
 */
class SoalController extends Controller
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
            $soals = Soal::where('jenis_soal','like','%'.$cari.'%')->paginate();
        }else{
            $soals = Soal::paginate();
        }

        return view('soal.index', compact('soals'))
            ->with('i', (request()->input('page', 1) - 1) * $soals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soal = new Soal();
        return view('soal.create', compact('soal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Soal::$rules);

        $soal = Soal::create($request->all());

        return redirect()->route('soal.index')
            ->with('success', 'Soal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal = Soal::find($id);

        return view('soal.show', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::find($id);

        return view('soal.edit', compact('soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Soal $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(Soal::$rules);
        $soal = Soal::find($id);
        $soal->update($request->all());

        return redirect()->route('soal.index')
            ->with('success', 'Soal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $soal = Soal::find($id)->delete();

        return redirect()->route('soal.index')
            ->with('success', 'Soal deleted successfully');
    }
}
