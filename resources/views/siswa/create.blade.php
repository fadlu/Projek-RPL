@extends ('template')

@section('main')
	<div id="siswa">
		<h2>Tambah Daftar Peminjam</h2>
		@include('errors.form_error_lists')

		{!! Form::open(['url'=>'siswa']) !!}
		@include('siswa.form', ['submitButtonText'=>'Tambah Anggota'])
		{!! Form::close()!!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop