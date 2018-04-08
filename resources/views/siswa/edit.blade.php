@extends ('template')

@section('main')
	<div id="siswa">
		<h2>Tambah Daftar Peminjam</h2>

		{!! Form::model($siswa, ['method'=>'PATCH', 'action'=>['siswaController@update',$siswa->id]]) !!}
		@include('siswa.form', ['submitButtonText'=>'Update Peminjam'])
		{!! Form::close()!!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop