@extends('welcome')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('member') }}">
		<i style="color:#000000" class="fa text-default fa-chevron-left"></i>
		</a>Detail data member</strong>
	</div>
	
	<table class="table">
		
		<tr>
			<td>nama</td>
			<td>:</td>
			<td>{{ $member->nama}}</td>
		</tr>

		<tr>
			<td>alamat</td>
			<td>:</td>
			<td>{{ $member->alamat}}</td>
		</tr>

		<tr>
			<td>id_paket</td>
			<td>:</td>
			<td>{{ $member->id_paket}}</td>
		</tr>

		<tr>
			<td>id_kelas</td>
			<td>:</td>
			<td>{{ $member->id_kelas}}</td>
		</tr>

		<tr>
			<td>id_jadwal</td>
			<td>:</td>
			<td>{{ $member->id_jadwal}}</td>
		</tr>

		<tr>
			<td>id_supir</td>
			<td>:</td>
			<td>{{ $member->id_supir}}</td>
		</tr>

		<tr>
			<td>id_mobil</td>
			<td>:</td>
			<td>{{ $member->id_mobil}}</td>
		</tr>


		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$member->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$member->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop