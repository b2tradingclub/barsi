{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')

@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-solid">
			<div class="box-header">
				<h3 class="box-title">Todas operações</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body no-padding">
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>Data</th>
							<th>Compra</th>
							<th>Venda</th>
							<th>Ação</th>
							<th>Preço</th>
							<th>Quantidade</th>
							<th>Taxas</th>
						</tr>
						@foreach($operations as $op)
						<tr>
							<td>{{$op->created_at}}</td>
							<td>{{($op->type == "buy" ? $op->type : null)}}</td>
							<td>{{($op->type == "sell" ? $op->type : null)}}</td>
							<td>{{$op->stock()->symbol}}</td>
							<td>{{$op->price}}</td>
							<td>{{$op->quantity}}</td>
							<td>{{$op->fees}}</td>
						</tr>
						@endforeach
					</tbody></table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	@stop
	@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
	@stop
	@section('js')
	<script> console.log('Hi!'); </script>
	@stop