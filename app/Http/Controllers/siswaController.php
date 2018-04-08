<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Validator;

class siswaController extends Controller
{
    public function index(){
    	$halaman = 'siswa';
    	$siswa_list = Siswa::orderBy('nama')->paginate(1);
        $jumlah_siswa = Siswa::count();
        return view('siswa.index', compact('halaman','siswa_list', 'jumlah_siswa'));
    }
    public function create(){
    	return view('siswa.create');
    }

    public function store(Request $request){
    	$input = $request->all();
        $validator = Validator::make($input, [
            'nim'=>'required|string|size:9',
            'nama'=>'required|string|max:30',
            'angkatan'=>'required|string|max:2',
            'departemen'=>'required|string|max:20',
            'buku_pinjam'=>'required|string|max:100',
            'tanggal_pinjam'=>'required|date',
            'status'=>'required|string|max:20',
            'jenis_kelamin'=>'required|in:L,P',
         ]);
        if($validator->fails()){
            return redirect('siswa/create')->withInput()->withErrors($validator);
        }
        Siswa::create($input);
        return redirect('siswa');

    }
    public function show($id){
        $halaman='siswa';
        $siswa=Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman', 'siswa'));
    }

    public function edit($id){
        $siswa=Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }
    public function update($id, Request $request){
        $siswa=Siswa::findOrFail($id);
        $input=$request->all();
                $validator = Validator::make($input, [
            'nim'=>'required|string|size:9',
            'nama'=>'required|string|max:30',
            'angkatan'=>'required|string|max:2',
            'departemen'=>'required|string|max:20',
            'buku_pinjam'=>'required|string|max:100',
            'tanggal_pinjam'=>'required|date',
            'status'=>'required|string|max:50',
            'jenis_kelamin'=>'required|in:L,P',
         ]);
        
        if($validator->fails()){
            return redirect('siswa/' . $id . '/edit')->withInput()->withErrors($validator);
        }
        $siswa->update($request->all());
        return redirect('siswa');
    }
    public function destroy($id){
        $siswa=Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
    public function tesCollection(){
        $collection= Siswa::all()->pluck('nim');
        return $collection;
    }
    
}
