@extends('template')

@section('main')
	<div id="siswa">
		<h2>Detail Anggota</h2>

		<table class="table table-striped">
			<tr>
				<th>NIM</th>
				<td>{{$siswa->nim}}</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>{{$siswa->nama}}</td>
			</tr>
			<tr>
				<th>Angkatan</th>
				<td>{{$siswa->angkatan}}</td>
			</tr>
			<tr>
				<th>Departemen</th>
				<td>{{$siswa->departemen}}</td>
			</tr>
			<tr>
				<th>Buku yang Dipinjam</th>
				<td>{{$siswa->buku_pinjam}}</td>
			</tr>
			<tr>
				<th>Status</th>
				<td>{{$siswa->status}}</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>{{$siswa->jenis_kelamin}}</td>
			</tr>
		</table>
	</div>
@stop

@section('footer')
	@include('footer')
@stop

