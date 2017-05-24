@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data supir</strong>
		<a href="{{url('supir/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>supir</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama</th>
			<th>sim</th>
			<th>alamat</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $supir)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $supir->id or 'id kosong'}}</td>
					<td>{{ $supir->nama or 'nama kosong'}}</td>
					<td>{{ $supir->sim or 'sim kosong'}}</td>
					<td>{{ $supir->alamat or 'alamat kosong'}}</td>
					
					
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('supir/edit/'.$supir->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('supir/'.$supir->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('supir/hapus/'.$supir->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data supir</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>nama</th>
			<th>sim</th>
			<th>alamat</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $supir)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $supir->id or 'id kosong'}}</td>
					<td>{{ $supir->nama or 'nama kosong'}}</td>
					<td>{{ $supir->sim or 'sim kosong'}}</td>
					<td>{{ $supir->alamat or 'alamat kosong'}}</td>
					@endforeach	
					</tr>
		</tbody>
	</table>
</div>
@stop
@endif
					

					