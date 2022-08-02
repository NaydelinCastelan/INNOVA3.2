@extends('layouts.app')

@section('template_title')
    Generar Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Generar Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('generar-pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Folio</th>
										<th>Cliente Id</th>
										<th>Fecha Encargo</th>
										<th>Fecha Entrega</th>
										<th>Hora</th>
										<th>Instalacion</th>
										<th>Descripcion</th>
										<th>Productos</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($generarPedidos as $generarPedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $generarPedido->folio }}</td>
											<td>{{ $generarPedido->cliente_id }}</td>
											<td>{{ $generarPedido->fecha_encargo }}</td>
											<td>{{ $generarPedido->fecha_entrega }}</td>
											<td>{{ $generarPedido->hora }}</td>
											<td>{{ $generarPedido->instalacion }}</td>
											<td>{{ $generarPedido->descripcion }}</td>
											<td>{{ $generarPedido->productos }}</td>
											<td>{{ $generarPedido->cantidad }}</td>
											<td>{{ $generarPedido->precio }}</td>
											<td>{{ $generarPedido->total }}</td>

                                            <td>
                                                <form action="{{ route('generar-pedidos.destroy',$generarPedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('generar-pedidos.show',$generarPedido->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('generar-pedidos.edit',$generarPedido->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $generarPedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
