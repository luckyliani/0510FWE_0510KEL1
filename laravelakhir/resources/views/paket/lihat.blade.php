@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('paket') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data paket</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama</td>
			<td>:</td>
			<td>{{ $paket->nama}}</td>
		</tr>

		<tr>
			<td>harga</td>
			<td>:</td>
			<td>{{ $paket->harga}}</td>
		</tr>

		<tr>
			<td>start</td>
			<td>:</td>
			<td>{{ $paket->start}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$paket->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$paket->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop