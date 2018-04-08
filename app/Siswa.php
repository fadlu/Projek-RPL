<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswa';
    protected $fillable = [
    	'nim',
    	'nama',
    	'angkatan',
    	'departemen',
    	'buku_pinjam',
        'tanggal_pinjam',
    	'status',
    	'jenis_kelamin',
    ];

    public function getNamaAttribute($nama){
        return ucwords($nama);
    }

    public function getDepartemenAttribute($departemen){
        return ucwords($departemen);
    }
}