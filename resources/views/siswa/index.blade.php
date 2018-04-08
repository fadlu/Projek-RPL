@extends('template')

@section('main')
	<div id="siswa">
		<h2>Daftar Mahasiswa Peminjam</h2>

		@if(!empty($siswa_list))
			<table class="table">
				<thead>
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Angkatan</th>
						<th>Departemen</th>
						<th>Buku yang Dipinjam</th>
						<th>Tanggal Peminjaman</th>
						<th>Status</th>
						<th>Jenis Kelamin</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa_list as $siswa)
					<tr>
						<td>{{ $siswa->nim}}</td>
						<td>{{ $siswa->nama}}</td>
						<td>{{ $siswa->angkatan}}</td>
						<td>{{ $siswa->departemen}}</td>
						<td>{{ $siswa->buku_pinjam}}</td>
						<td>{{ $siswa->tanggal_pinjam}}</td>
						<td>{{ $siswa->status}}</td>
						<td>{{ $siswa->jenis_kelamin}}</td>
						<td>
							<div class="box-button">
								{{link_to('siswa/' . $siswa->id, 'Detail', ['class' =>'btn btn-success btn-sm']) }}
							</div>
							<div class="box-button"> 
								{{link_to('siswa/' . $siswa->id. '/edit', 'Edit', ['class'=> 'btn btn-warning btn-sm']) }}
							</div>
							<div class="box-button">
								{!! Form::open(['method'=> 'DELETE', 'action'=>['siswaController@destroy',$siswa->id]]) !!}
								{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
					</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<p>Tidak ada data siswa</p>
		@endif

	<div class="table-bottom">		
		<div class="float-right">
			{{ $siswa_list->links() }}
		</div>
	</div>

	<div class="tombol-nav">
		<div>
			<a href="siswa/create" class="btn btn-primary">Tambah Daftar Peminjam</a>
		</div>
	</div>
</div> <!-- / #siswa -->
@stop

@section('footer')
	@include('footer')
@stop