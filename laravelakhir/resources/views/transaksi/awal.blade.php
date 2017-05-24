@extends('welcome')
@section('container')
@if(Auth::user()->level == 'admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data transaksi</strong>
		<a href="{{url('transaksi/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>transaksi</a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>Nama Member</th>
			<th>Harga Paket	</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $transaksi)
				<tr>
					<td>{{ $transaksi->nm or 'nama kosong'}}</td>
					<td>{{ $transaksi->harga or 'harga kosong'}}</td>
					
					
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('transaksi/edit/'.$transaksi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('transaksi/'.$transaksi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('transaksi/hapus/'.$transaksi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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
		<strong>Seluruh Data transaksi</strong>

		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>Nama Member</th>
			<th>Harga Paket	</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $transaksi)
				<tr>
					<td>{{ $transaksi->nm or 'nama kosong'}}</td>
					<td>{{ $transaksi->harga or 'harga kosong'}}</td>
					@endforeach	

			</tr>
		</tbody>
	</table>
</div>
@stop
@endif
					
					