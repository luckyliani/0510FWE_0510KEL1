@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data kelas</strong>
		<a href="{{url('kelas/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>kelas</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama kelas</th>
			<th>keterangan</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $kelas)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kelas->id or 'id kosong'}}</td>
					<td>{{ $kelas->nama or 'nama kosong'}}</td>
					<td>{{ $kelas->keterangan or 'keterangan kosong'}}</td>
					
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('kelas/edit/'.$kelas->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('kelas/'.$kelas->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('kelas/hapus/'.$kelas->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data kelas</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama kelas</th>
			<th>keterangan</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $kelas)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kelas->id or 'id kosong'}}</td>
					<td>{{ $kelas->nama or 'nama kosong'}}</td>
					<td>{{ $kelas->keterangan or 'keterangan kosong'}}</td>
					@endforeach	
			</tr>
		</tbody>
	</table>
</div>
@stop
@endif
			