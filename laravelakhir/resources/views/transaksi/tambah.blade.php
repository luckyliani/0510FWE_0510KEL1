@extends('welcome')
@section('container')
<nav class="navbar navbar-default">
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('transaksi')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Tambah data transaksi</strong>
	</div>
{!! Form::open(['class' => 'form-horizontal','url' => 'transaksi/simpan']) !!}
        		@include('transaksi/form/form', ['submit_text' => 'Tambah Data'])
		<div style="width: 100%;text-align= right;">
			<button class="btn btn-primary">
				<i class="fa fa-save"></i>Simpan
			</button>
			<button class="btn btn-danger">
				<i class="fa fa-undo"></i>ulangi
			</button>
			</div>
		</div>
		
		{!! Form::close() !!}
		</div>
@stop