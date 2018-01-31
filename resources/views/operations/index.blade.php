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
				<div class="box-tools">
					<button data-toggle="modal" data-target="#create-modal" class="btn btn-primary">
						<i class="fa fa-handshake-o" aria-hidden="true"></i> Adicionar Operação
					</button>
				</div>
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
	{{-- MODAL --}}
	<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<form action="{{route('operacoes.store')}}" method="POST">
	    		{{csrf_field()}}
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Adicionar operação</h4>
		      </div>
		      <div class="modal-body">
		      	
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="form-group">
		        			<label>Ação</label>
		        			<select style="width: 100%" id="stock-select" class="form-control">Teste</select>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label>Preço</label>
		        			<input class="form-control" type="text" name="">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label>Quantidade</label>
		        			<input class="form-control" type="text" name="">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="">Data</label>
		        			<div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input class="form-control pull-right" id="datepicker" type="text">
			                </div>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="">Tipo</label>
		        			<div class="radio">
			                    <label>
			                      <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
			                      Compra
			                    </label>
		                  	</div>
		                  	<div class="radio">
			                    <label>
			                      <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
			                      Venda
			                    </label>
		                  	</div>
		        		</div>
		        	</div>
		        </div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <button type="submit" class="btn btn-primary">Enviar</button>
		      </div>
	  		</form>
	    </div>
	  </div>
	</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
	$("#stock-select").select2();
	$("#datepicker").daterangepicker();
</script>
@stop