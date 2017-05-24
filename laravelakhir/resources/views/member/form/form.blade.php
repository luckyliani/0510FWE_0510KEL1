<div class="form-group">
	<label class="col-sm-2 control-label">nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"alamat"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">paket</label>
	<div class="col-sm-10">
		{!! Form::select('id_paket', $paket->lists('nama','id'),null,['class'=>'form-control','id'=>'paket_id','placeholder'=>"id_paket"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">kelas</label>
	<div class="col-sm-10">
		{!! Form::select('id_kelas', $kelas->lists('keterangan','id'),null,['class'=>'form-control','id'=>'kelas_id','placeholder'=>"id_kelas"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">jadwal</label>
	<div class="col-sm-10">
		{!! Form::select('id_jadwal', $jadwal->lists('hari','id'),null,['class'=>'form-control','id'=>'jadwal_id','placeholder'=>"id_jadwal"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">supir</label>
	<div class="col-sm-10">
		{!! Form::select('id_supir', $supir->lists('nama','id'),null,['class'=>'form-control','id'=>'supir_id','placeholder'=>"id_supir"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">mobil</label>
	<div class="col-sm-10">
		{!! Form::select('id_mobil', $mobil->lists('nama','id'),null,['class'=>'form-control','id'=>'mobil_id','placeholder'=>"id_mobil"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">username</label>
	<div class="col-sm-10">
		{!! form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">level</label>
	<div class="col-sm-10">
		{!! form::text('level',null,['class'=>'form-control','placeholder'=>"level"]) !!}
	</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">password</label>
	<div class="col-sm-10">
		{!! form::password('password',['class'=>'form-control','placeholder'=>"password"]) !!}
	</div>
</div>