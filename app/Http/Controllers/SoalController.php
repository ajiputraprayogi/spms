<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use DB;

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
            $cari = '';
            $soals = Soal::groupby('jenis_soal')->paginate();
            // $soals = Soal::inRandomOrder()->limit(1)->paginate();
            // $soals = DB::table('soal')->inRandomOrder()->paginate();
            // dd($soals);
        }

        return view('soal.index', compact('soals','cari'))
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
        // request()->validate(Soal::$rules);
        $request->validate([
            'jenis_soal' => 'required|unique:soal',
            'jawaban' => 'required'
        ]);
        // dd($request->a);

        for($i=0; $i < count($request->soal); $i++){
            $a = '';
            $b = '';
            $c = '';
            $d = '';
            if(!empty($request->a[$i])){
                $a = $request->a[$i];
            }
            if(!empty($request->b[$i])){
                $b = $request->b[$i];
            }
            if(!empty($request->c[$i])){
                $c = $request->c[$i];
            }
            if(!empty($request->d[$i])){
                $d = $request->d[$i];
            }

            $soal = Soal::create([
                'jenis_soal'=>$request->jenis_soal,
                'jumlah_soal_abc'=>$request->jumlah_soal_abc,
                'jumlah_soal_yt'=>$request->jumlah_soal_yt,
                'status'=>$request->status,
                'minimal_score'=>$request->minimal_score,
                'soal'=>$request->soal[$i],
                'tipe_soal'=>$request->tipe_soal[$i],
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d,
                'jawaban'=>$request->jawaban[$i]
            ]);

        }


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
        // dd($id);
        // request()->validate(Soal::$rules);
        // $soal = Soal::find($id);
        // $soal->update($request->all());
        $jenissoal = Soal::find($id);
        // dd($jenissoal->id);
        $soal = Soal::where('jenis_soal', $jenissoal->jenis_soal)->get();
        foreach($soal as $rowsoal){
            $a = '';
            $b = '';
            $c = '';
            $d = '';
            if(!empty($request->a[$rowsoal->id])){
                $a = $request->a[$rowsoal->id];
            }
            if(!empty($request->b[$rowsoal->id])){
                $b = $request->b[$rowsoal->id];
            }
            if(!empty($request->c[$rowsoal->id])){
                $c = $request->c[$rowsoal->id];
            }
            if(!empty($request->d[$rowsoal->id])){
                $d = $request->d[$rowsoal->id];
            }

            $soal = Soal::find($rowsoal->id)->update([
                'jenis_soal'=>$request->jenis_soal,
                'jumlah_soal_abc'=>$request->jumlah_soal_abc,
                'jumlah_soal_yt'=>$request->jumlah_soal_yt,
                'status'=>$request->status,
                'minimal_score'=>$request->minimal_score,
                'soal'=>$request->soal[$rowsoal->id],
                'tipe_soal'=>$request->tipe_soal[$rowsoal->id],
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d,
                'jawaban'=>$request->jawaban[$rowsoal->id]
            ]);
        }

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
        $jenissoal = Soal::find($id);
        $soal = Soal::where('jenis_soal', $jenissoal->jenis_soal)->get();
        foreach($soal as $rowsoal){
            $soal = Soal::find($rowsoal->id)->delete();
        }

        return redirect()->route('soal.index')
            ->with('success', 'Soal deleted successfully');
    }
}
