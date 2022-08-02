@extends('layouts.app')

@section('template_title')
    {{ $generarPedido->name ?? 'Show Generar Pedido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Generar Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generar-pedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $generarPedido->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $generarPedido->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Encargo:</strong>
                            {{ $generarPedido->fecha_encargo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $generarPedido->fecha_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $generarPedido->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Instalacion:</strong>
                            {{ $generarPedido->instalacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $generarPedido->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Productos:</strong>
                            {{ $generarPedido->productos }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $generarPedido->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $generarPedido->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $generarPedido->total }}
                        </div>
                        <div class="form-group">
                            <strong>Entregado:</strong>
                            {{ $generarPedido->entregado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
