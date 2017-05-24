@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('mobil') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data mobil</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama</td>
			<td>:</td>
			<td>{{ $mobil->nama}}</td>
		</tr>

		<tr>
			<td>jenis_transmisi</td>
			<td>:</td>
			<td>{{ $mobil->jenis_transmisi}}</td>
		</tr>

		<tr>
			<td>no_plat</td>
			<td>:</td>
			<td>{{ $mobil->no_plat}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$mobil->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$mobil->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop