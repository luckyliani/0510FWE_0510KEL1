@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data member</strong>
		<a href="{{url('member/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>member</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>nama</th>
			<th>alamat</th>
			<th>nama paket</th>
			<th>nama kelas</th>
			<th>jadwal</th>
			<th>nama supir</th>
			<th>nama mobil</th>
					</tr>
		</thead>
		<tbody>
			@foreach ($data as $member)
				<tr>
					<td>{{ $member->nama or 'nama kosong'}}</td>
					<td>{{ $member->alamat or 'alamat kosong'}}</td>
					<td>{{ $member->np or 'nama kosong'}}</td>
					<td>{{ $member->nk or 'id_kelas kosong'}}</td>
					<td>{{ $member->hari or 'id_jadwal kosong'}}</td>
					<td>{{ $member->ns or 'id_supir kosong'}}</td>
					<td>{{ $member->nm or 'id_mobil kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('member/edit/'.$member->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('member/'.$member->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('member/hapus/'.$member->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data member</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>nama</th>
			<th>alamat</th>
			<th>nama paket</th>
			<th>nama kelas</th>
			<th>jadwal</th>
			<th>nama supir</th>
			<th>nama mobil</th>
					</tr>
		</thead>
		<tbody>
			@foreach ($data as $member)
				<tr>
					<td>{{ $member->nama or 'nama kosong'}}</td>
					<td>{{ $member->alamat or 'alamat kosong'}}</td>
					<td>{{ $member->np or 'nama kosong'}}</td>
					<td>{{ $member->nk or 'id_kelas kosong'}}</td>
					<td>{{ $member->hari or 'id_jadwal kosong'}}</td>
					<td>{{ $member->ns or 'id_supir kosong'}}</td>
					<td>{{ $member->nm or 'id_mobil kosong'}}</td>
					<td>
				@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop
@endif