<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rekaman;
use Illuminate\Support\Facades\DB;

class LihatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Rekaman::all();
        //$judul = "Home";
        //$data = Rekaman::orderBy('matkul', 'asc')->get();
        //$data = Rekaman::where('matkul', 'PBO')->get(); 
        //return view ('lihat.lihat',compact('data'),['judul' => $judul]); 

        $rekaman = DB::table('rekaman')->get();
        return view ('lihat.lihat', ['rekaman' => $rekaman]);
    }

    public function see($id)
    {
        $rekaman = rekaman::find($id);
        $judul = "Nonton";
        $daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        $kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        $pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        $statistika = Rekaman::where('matkul', 'Statistika')->get();

        $data = DB::table('rekaman')->paginate(20);

        return view('lihat.rekaman_lihat',compact(['daskomjar','daskom','kalkulus','pad','pbo','agama','pancasila','statistika']), ['rekaman' => $rekaman,'judul'=>$judul,'data'=>$data]);
    }
    
    public function matkul()
    {
        $judul = "Mata Kuliah";

        return view ('lihat.matkul');
    }

    public function daskomjar()
    {
        $daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        // $kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        // $pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        // $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        // $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.daskomjar',compact(['daskomjar'])); 
    }

    public function daskom()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        // $kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        // $pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        // $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        // $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.daskom',compact(['daskom'])); 
    }

    public function kalkulus()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        $kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        // $pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        // $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        // $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.kalkulus',compact(['kalkulus'])); 
    }
    public function pad()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        //$kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        $pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        // $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        // $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.pad',compact(['pad'])); 
    }

    public function pbo()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        //$kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        //$pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        $pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        // $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.pbo',compact(['pbo'])); 
    }

    public function agama()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        //$kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        //$pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        //$pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        $agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        // $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.agama',compact(['agama'])); 
    }

    public function pancasila()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        //$kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        //$pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        //$pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        //$agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        $pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        // $statistika = Rekaman::where('matkul', 'Statistaka')->get();
        return view ('matkul.pancasila',compact(['pancasila'])); 
    }

    public function statistika()
    {
        //$daskomjar = Rekaman::where('matkul','Dasar Komunikasi Dan Jaringan')->get();
        // $daskom = Rekaman::where('matkul', 'Dasar Dasar Komputer')->get();
        //$kalkulus = Rekaman::where('matkul', 'Kalkulus')->get();
        //$pad = Rekaman::where('matkul', 'Pemrograman Analisa Data')->get();
        //$pbo = Rekaman::where('matkul', 'Pemrograman Berorientasi Obyek I')->get();
        //$agama = Rekaman::where('matkul','Pendidikan Agama')->get();
        //$pancasila = Rekaman::where('matkul', 'Pendidikan Pancasila')->get();
        $statistika = Rekaman::where('matkul', 'Statistika')->get();
        return view ('matkul.statistika',compact(['statistika'])); 
    }

    public function contact_us()
    {
        return view ('lihat.contact_us');
    }

    public function kirim(Request  $request)
    {
        $request->validate([
            'nama'        => 'required',
            'tujuan'      => 'required',
            'telpon'      => 'required|min:11|max:12',
            'alamat'      => 'required',
            'pesan' => 'required',
        ]);
        
        return view('kirim');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
