<div class="form-group">
	<label class="col-sm-2 control-label">Id</label>
	<div class="col-sm-10">
	{!! Form::text('id',null,['class'=>'form-control','placeholder'=>"Id"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">member</label>
	<div class="col-sm-10">
		{!! Form::select('id_member', $member->lists('nama','id'),null,['class'=>'form-control','id'=>'id_member','placeholder'=>"id_member"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">paket</label>
	<div class="col-sm-10">
		{!! Form::select('id_paket', $paket->lists('nama','id'),null,['class'=>'form-control','id'=>'id_paket','placeholder'=>"id_paket"]) !!}
	</div>
</div>