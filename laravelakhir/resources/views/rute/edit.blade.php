@extends('welcome')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('rute')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Pembaruan data rute</strong>
	</div>
	{!! Form::model($rute, ['url' =>'rute/edit/'.$rute->id,'class'=>'form-horizontal'])!!}
       			 @include('rute.form.form')
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btnwelcome btn-danger">
				<i class="fa fa-undo"></i>Ulangi
			</button>
		</div>
		{!!form::close()!!}
		</div>
@stop