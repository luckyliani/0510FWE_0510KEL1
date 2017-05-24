@extends('welcome')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('mobil')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Pembaruan data mobil</strong>
	</div>
	{!! Form::model($mobil, ['url' =>'mobil/edit/'.$mobil->id,'class'=>'form-horizontal'])!!}
       			 @include('mobil.form.form')
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