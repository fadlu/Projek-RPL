@extends ('template')

@section('main')
	<div id="siswa">
		<h2>Tambah Daftar Peminjam</h2>
		@include('errors.form_error_lists')

		{!! Form::model($siswa, ['method'=>'PATCH', 'action'=>['siswaController@update',$siswa->id]]) !!}
		@include('siswa.form', ['submitButtonText'=>'Update Peminjam'])
		{!! Form::close()!!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop