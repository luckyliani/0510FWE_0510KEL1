@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('rute') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data rute</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>start</td>
			<td>:</td>
			<td>{{ $rute->start}}</td>
		</tr>

		<tr>
			<td>finish</td>
			<td>:</td>
			<td>{{ $rute->finish}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rute->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rute->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop