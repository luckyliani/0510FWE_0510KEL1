@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('transaksi') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data transaksi</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama_paket</td>
			<td>:</td>
			<td>{{ $transaksi->id_paket}}</td>
		</tr>

		<tr>
			<td>nama_member</td>
			<td>:</td>
			<td>{{ $transaksi->id_member}}</td>
		</tr>

		<tr>
			<td>harga</td>
			<td>:</td>
			<td>{{ $transaksi->harga}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$transaksi->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$transaksi->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop