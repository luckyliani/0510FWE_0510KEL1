@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data rute</strong>
		<a href="{{url('rute/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>rute</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>start</th>
			<th>finish</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $rute)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $rute->id or 'id kosong'}}</td>
					<td>{{ $rute->start or 'start kosong'}}</td>
					<td>{{ $rute->finish or 'finish kosong'}}</td>
					
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('rute/edit/'.$rute->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('rute/'.$rute->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('rute/hapus/'.$rute->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data rute</strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>start</th>
			<th>finish</th>
			
					</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $rute)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $rute->id or 'id kosong'}}</td>
					<td>{{ $rute->start or 'start kosong'}}</td>
					<td>{{ $rute->finish or 'finish kosong'}}</td>
					@endforeach	

		
			</tr>
		</tbody>
	</table>
</div>
@stop
@endif