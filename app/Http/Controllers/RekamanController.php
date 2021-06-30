<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str; 
use Illuminate\Http\Request;

//panggil model rekaman
use App\Models\Rekaman;

use Illuminate\Support\Facades\Auth;

use Validator;
use Hash;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class RekamanController extends Controller
{
    public function index()
    {
        //mengambil data rekaman
        //$rekaman = Rekaman::all();

        // mengambil data dari table rekaman
        $rekaman = DB::table('rekaman')->get();
        
    

        //mengirim data rekaman ke view rekaman
        return view ('admin.rekaman', ['rekaman' => $rekaman]);
    }


    public function tambah()
    {
        return view ('admin.rekaman_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            //Author	matkul	kelas	dosen	link
            'nama' => 'required',
            'judul' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'dosen' => 'required',
            'link' => 'required|unique:rekaman'
        ]);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);
        
        $id_data = Str::random(8);

        DB::table('rekaman')->insert([
            'id' => $id_data,
            'nama' => $request->nama,
            'judul' => $request->judul,
            'matkul' => $request->matkul,
            'kelas' => $request->kelas,
            'dosen' => $request->dosen,
            'link' => $request->link,
            'rekaman_id' => $link_id
        ]);
        // Rekaman::create([
            // 'nama' => $request->nama,
            // 'judul' => $request->judul,
            // 'matkul' => $request->matkul,
            // 'kelas' => $request->kelas,
            // 'dosen' => $request->dosen,
            // 'link' => $request->link,
            // 'rekaman_id' => $link_id,
            // 'tanggal' => $request->created_at,
            // 'tanggal' => $request->updated_at
            
        //     //'rekaman_id' => $request->link_id
        //     // $tanggal => 
        //     // $tanggal => $request->updated_at
            
        // ]);
        
        return redirect('/rekaman')->with('success',' Link Rekaman Telah Di Tambah');
    }

    public function edit($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
        //$rekaman = DB::table('rekaman')->where('id',$id)->get(); 
    
        // passing data siswa yang didapat ke view edit.blade.php 
        //return view('admin.rekaman_edit',['rekaman' => $rekaman]);

        $rekaman = rekaman::find($id);
        return view('admin.rekaman_edit', ['rekaman' => $rekaman]);
    }
    public function setting($id)
    {
        $user = User::find($id);
        return view('admin.setting', ['user' => $user]);
    }

    public function settingUpdate($id,Request $request)
    {

        $request->validate([
            'name'                  => 'required|min:3|max:35',
            'current_password'      => 'required',
            'email'                 => 'required',
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        // $user = User::find($id);
        // $user = Auth::user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $data = DB::table('users')->where('id', $id)->update([
            'name' => ucwords(strtolower($request->name)),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password)
        ]);

        // $user->name = ucwords(strtolower($request->name));
        // $user->email = strtolower($request->email);
        // $user->password = Hash::make($request->password);
        // $user->save();
        
        return back()->with('success', 'Password successfully changed!');
    }
    

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'judul' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'dosen' => 'required',
            'link' => 'required'
        ]);
        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $data = DB::table('rekaman')->where('id', $id)->update([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'matkul' => $request->matkul,
            'kelas' => $request->kelas,
            'dosen' => $request->dosen,
            'link' => $request->link,
            'rekaman_id' => $link_id
        ]);
        // $affected = DB::table('rekaman')->where('id', $id)->update([
        //     'nama' => $request->nama,
        //     'judul' => $request->judul,
        //     'matkul' => $request->matkul,
        //     'kelas' => $request->kelas,
        //     'dosen' => $request->dosen,
        //     'link' => $request->link,
        //     'rekaman_id' => $link_id
        // ]);

        // Rekaman::find($request['id'])->update([
            // 'nama' => $request->nama,
            // 'judul' => $request->judul,
            // 'matkul' => $request->matkul,
            // 'kelas' => $request->kelas,
            // 'dosen' => $request->dosen,
            // 'link' => $request->link,
            // 'rekaman_id' => $link_id
        // ]);

        // $rekaman = Rekaman::where(['id' => $id])->update([
        //     'nama' => $request->nama,
        //     'judul' => $request->judul,
        //     'matkul' => $request->matkul,
        //     'kelas' => $request->kelas,
        //     'dosen' => $request->dosen,
        //     'link' => $request->link,
        //     'rekaman_id' => $link_id
        // ]);

        // DB::table('rekaman')->where($rekaman->id)->update([
        //     'nama' => $request->nama,
        //     'judul' => $request->judul,
        //     'matkul' => $request->matkul,
        //     'kelas' => $request->kelas,
        //     'dosen' => $request->dosen,
        //     'link' => $request->link,
        //     'rekaman_id' => $link_id
        // ]);

        // $rekaman = Rekaman::find($id);
        // $rekaman->nama = $request->nama;
        // $rekaman->judul = $request->judul;
        // $rekaman->matkul = $request->matkul;
        // $rekaman->kelas = $request->kelas;
        // $rekaman->dosen = $request->dosen;
        // $rekaman->link = $request->link;
        // $rekaman->rekaman_id = $link_id;
        // $rekaman->save();
        
        return redirect('/rekaman')->with('success',' Link Rekaman Telah Di Ubah');
    }

    public function delete($id)
    {
        $rekaman = Rekaman::find($id);
        $rekaman->delete();
        
        return redirect('/rekaman')->with('success',' Link Rekaman Telah Di Hapus');
    }

    public function cari(Request $request)
    {
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil daya dari table rekaman sesuai pencarian
        // $rekaman_kelas =DB::table('rekaman')
        // ->where('kelas','like',"%".$cari."%")
        // ->paginate();

        // $rekaman_nama =DB::table('rekaman')
        // ->where('nama','like',$cari."%")
        // ->paginate();

        $rekaman =DB::table('rekaman')
        ->where('matkul','like',"%".$cari."%")
        ->paginate();

        // $rekaman_dosen =DB::table('rekaman')
        // ->where('dosen','like',$cari."%")
        // ->paginate();

        //mengirim data rekaman ke view index
        return view('rekaman',[
            // 'rekaman'=> $rekaman_kelas,
            // 'rekaman'=> $rekaman_nama,
            // 'rekaman'=> $rekaman_matkul,
            // 'rekaman'=> $rekaman_dosen,
            'rekaman'=> $rekaman
        ]);
    }
    public function Lihatcari(Request $request)
    {
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil daya dari table rekaman sesuai pencarian
        // $rekaman_kelas =DB::table('rekaman')
        // ->where('kelas','like',"%".$cari."%")
        // ->paginate();

        // $rekaman_nama =DB::table('rekaman')
        // ->where('nama','like',$cari."%")
        // ->paginate();

        $rekaman =DB::table('rekaman')
        ->where('matkul','like',"%".$cari."%")
        ->paginate();

        // $rekaman_dosen =DB::table('rekaman')
        // ->where('dosen','like',$cari."%")
        // ->paginate();

        //mengirim data rekaman ke view index
        return view('lihat',[
            // 'rekaman'=> $rekaman_kelas,
            // 'rekaman'=> $rekaman_nama,
            // 'rekaman'=> $rekaman_matkul,
            // 'rekaman'=> $rekaman_dosen,
            'rekaman'=> $rekaman
        ]);
    }
}
