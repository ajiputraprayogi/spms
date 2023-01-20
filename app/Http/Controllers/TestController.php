<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Auth;
use DB;

/**
 * Class TestController
 * @package App\Http\Controllers
 */
class TestController extends Controller
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
            $tests = Test::where('id_user', Auth::user()->id)->where('status','Belum')->paginate(1);
        }

        return view('test.index', compact('tests'))
            ->with('i', (request()->input('page', 1) - 1) * $tests->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = new Test();
        return view('test.create', compact('test'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idsoal = $request->id_soal;
        $jawaban = $request->jawaban;
        $soal = DB::table('soal')->whereIn('id', $idsoal)->get();
        $benar = [];
        $salah = [];
        foreach($soal as $rowsoal){
            if(empty($jawaban[$rowsoal->id])){
                array_push($salah, $rowsoal->jawaban);
            }else if($jawaban[$rowsoal->id] == $rowsoal->jawaban){
                array_push($benar, $rowsoal->jawaban);
            }else{
                array_push($salah, $rowsoal->jawaban);
            }
            $minimal_score = (int)$rowsoal->minimal_score;
        }
        $jumlahbenar = count($benar);
        $jumlahsalah = count($salah);
        $totalsoal = count($idsoal);
        $hitung = 100/$totalsoal;
        $nilai = $hitung*$jumlahbenar;

        if($nilai >= $minimal_score){
            $status = 'Lolos';
        }else{
            $status = 'Gagal';
        }

        request()->validate(Test::$rules);

        $jenis = DB::table('soal')->where('id', $idsoal)->first();
        $test = Test::where([['id_user', Auth::user()->id],['jenis_soal', $jenis->jenis_soal]])->update([
            'nilai' => $nilai,
            'status' => $status
        ]);

        return redirect()->route('test.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);

        return view('test.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);

        return view('test.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Test $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate(Test::$rules);
        $test = Test::find($id);
        $test->update($request->all());

        return redirect()->route('test.index')
            ->with('success', 'Test updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $test = Test::find($id)->delete();

        return redirect()->route('test.index')
            ->with('success', 'Test deleted successfully');
    }
}
