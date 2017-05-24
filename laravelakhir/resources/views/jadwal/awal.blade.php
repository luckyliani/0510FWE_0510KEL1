@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal</strong>
		<a href="{{url('jadwal/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>jadwal</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>jam</th>
			<th>hari</th>
			<th>jumlah_hari</th>
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->id or 'id kosong'}}</td>
					<td>{{ $jadwal->jam or 'jam kosong'}}</td>
					<td>{{ $jadwal->hari or 'hari kosong'}}</td>
					<td>{{ $jadwal->jumlah_hari or 'jumlah_hari kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('jadwal/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('jadwal/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('jadwal/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-premove"></i>
							</a>
						</div>

						</td>
						</tr>
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@elseif(Auth::user()->level == 'member')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal</strong>
<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>jam</th>
			<th>hari</th>
			<th>jumlah_hari</th>
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->id or 'id kosong'}}</td>
					<td>{{ $jadwal->jam or 'jam kosong'}}</td>
					<td>{{ $jadwal->hari or 'hari kosong'}}</td>
					<td>{{ $jadwal->jumlah_hari or 'jumlah_hari kosong'}}</td>
					@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@endif
