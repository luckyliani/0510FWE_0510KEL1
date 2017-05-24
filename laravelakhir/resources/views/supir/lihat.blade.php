@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('supir') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data supir</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama</td>
			<td>:</td>
			<td>{{ $supir->nama}}</td>
		</tr>

		<tr>
			<td>sim</td>
			<td>:</td>
			<td>{{ $supir->sim}}</td>
		</tr>

		<tr>
			<td>alamat</td>
			<td>:</td>
			<td>{{ $supir->alamat}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$supir->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$supir->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop