@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kelas') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data kelas</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama</td>
			<td>:</td>
			<td>{{ $kelas->nama}}</td>
		</tr>

		<tr>
			<td>keterangan</td>
			<td>:</td>
			<td>{{ $kelas->keterangan}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kelas->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kelas->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop