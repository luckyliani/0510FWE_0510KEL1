<div class="form-group">
	<label class="col-sm-2 control-label">Id</label>
	<div class="col-sm-10">
	{!! Form::text('id',null,['class'=>'form-control','placeholder'=>"Id"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">harga</label>
	<div class="col-sm-10">
		{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>"harga"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">rute</label>
	<div class="col-sm-10">
		{!! Form::select('id_rute', $rute->lists('start','id'),null,['class'=>'form-control','id'=>'rute_id','placeholder'=>"id_rute"]) !!}
	</div>
</div>
