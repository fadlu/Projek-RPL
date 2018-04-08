@if (isset($siswa))
	{!! Form::hidden('id', $siswa->id)!!}
@endif
			<div class="form-group">
				{!! Form::label('nim', "NIM", ['class'=>'control-label']) !!}
				{!! Form::text('nim', null, ['class'=>'form-control']) !!}
				</div>
	
	
			<div class="form-group">
				{!! Form::label('nama', "Nama", ['class'=>'control-label']) !!}
				{!! Form::text('nama', null, ['class'=>'form-control']) !!}
				</div>

			<div class="form-group">
				{!! Form::label('angkatan', "Angkatan", ['class'=>'control-label']) !!}
				{!! Form::text('angkatan', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('departemen', "Departemen", ['class'=>'control-label']) !!}
				{!! Form::text('departemen', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('buku_pinjam', "Buku yang Dipinjam", ['class'=>'control-label']) !!}
				{!! Form::text('buku_pinjam', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('tanggal_pinjam', "Tanggal Peminjaman", ['class'=>'control-label']) !!}
				{!! Form::date('tanggal_pinjam', null, ['class'=>'form-control', 'id'=>'tanggal_pinjam']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('status', "Status", ['class'=>'control-label']) !!}
				{!! Form::text('status', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('jenis_kelamin', "Jenis Kelamin:", ['class'=>'control-label']) !!}
				<div class="radio">
					<label>{!! Form::radio('jenis_kelamin', 'L') !!}Laki-laki</label>
				</div>
				<div class="radio">
					<label>{!! Form::radio('jenis_kelamin', 'P') !!}Perempuan</label>
				</div>	
			</div>

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
			</div>