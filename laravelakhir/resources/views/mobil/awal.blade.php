@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data mobil</strong>
		<a href="{{url('mobil/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>mobil</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama</th>
			<th>jenis_transmisi</th>
			<th>no_plat</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $mobil)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $mobil->id or 'id kosong'}}</td>
					<td>{{ $mobil->nama or 'nama kosong'}}</td>
					<td>{{ $mobil->jenis_transmisi or 'jenis_transmisi kosong'}}</td>
					<td>{{ $mobil->no_plat or 'no_plat kosong'}}</td>
					
					
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('mobil/edit/'.$mobil->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('mobil/'.$mobil->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('mobil/hapus/'.$mobil->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data mobil</strong>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama</th>
			<th>jenis_transmisi</th>
			<th>no_plat</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $mobil)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $mobil->id or 'id kosong'}}</td>
					<td>{{ $mobil->nama or 'nama kosong'}}</td>
					<td>{{ $mobil->jenis_transmisi or 'jenis_transmisi kosong'}}</td>
					<td>{{ $mobil->no_plat or 'no_plat kosong'}}</td>
					
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@endif