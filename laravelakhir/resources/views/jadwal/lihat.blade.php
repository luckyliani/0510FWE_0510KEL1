@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data Jadwal</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>jam</td>
			<td>:</td>
			<td>{{ $jadwal->jam}}</td>
		</tr>

		<tr>
			<td>hari</td>
			<td>:</td>
			<td>{{ $jadwal->hari}}</td>
		</tr>

		<tr>
			<td>jumlah_hari</td>
			<td>:</td>
			<td>{{ $jadwal->jumlah_hari}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop