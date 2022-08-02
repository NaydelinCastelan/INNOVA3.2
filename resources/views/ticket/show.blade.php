@extends('layouts.app')

@section('template_title')
    {{ $ticket->name ?? 'Show Ticket' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ticket</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $ticket->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Info Empresa:</strong>
                            {{ $ticket->info_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Pedido:</strong>
                            {{ $ticket->pedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
