@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data paket</strong>
		<a href="{{url('paket/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>paket</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>nama</th>
			<th>harga</th>
			<th>rute</th>
		</tr>
		</thead>
		<tbody>
		<?php $x=1;?>
			@foreach ($data as $paket)
				<tr>
					<td>{{ $paket->nama or 'nama kosong'}}</td>
					<td>{{ $paket->harga or 'harga kosong'}}</td>
					<td>{{ $paket->start or 'nama kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('paket/edit/'.$paket->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('paket/'.$paket->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('paket/hapus/'.$paket->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-premove"></i>
							</a>
						</div>

						</td>
						
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@elseif(Auth::user()->level == 'member')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data paket</strong>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>nama</th>
			<th>harga</th>
			<th>rute</th>
		</tr>
		</thead>
		<tbody>
		<?php $x=1;?>
			@foreach ($data as $paket)
				<tr>
					<td>{{ $paket->nama or 'nama kosong'}}</td>
					<td>{{ $paket->harga or 'harga kosong'}}</td>
					<td>{{ $paket->start or 'nama kosong'}}</td>
					
						
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@endif