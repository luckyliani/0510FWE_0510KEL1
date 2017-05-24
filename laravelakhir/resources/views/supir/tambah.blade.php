@extends('welcome')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('supir')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Tambah data supir</strong>
	</div>
{!! Form::open(['class' => 'form-horizontal','url' => 'supir/simpan']) !!}
        		@include('supir/form/form', ['submit_text' => 'Tambah Data'])
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary">
				<i class="fa fa-save"></i>Simpan
			</button>
			<button class="btn btn-danger">
				<i class="fa fa-undo"></i>ulangi
			</button>
		</div>
		
		{!! Form::close() !!}
		</div>
@stop