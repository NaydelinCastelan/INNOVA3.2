@extends('layouts.layout') @section('Nombre', 'Inicio')
@section('contenido')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row gutter-40 col-mb-80">
                    <!-- Post Content
          ============================================= -->
                    <div class="postcontent col-lg-12">

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 mb-5">
                                <a href="{{ route('pendientes') }}" target="_blank">
                                    <img src="/assets/images/crear.png" alt="Plan Form" class="img-thumbnail">
                                    <h4 class="d-block mt-3 mb-0 center">Pedidos pendientes</h4>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-5">
                                <a href="{{ route('completados') }}" target="_blank">
                                    <img src="/assets/images/crear.png" alt="Floating Contact Form" class="img-thumbnail">
                                    <h4 class="d-block mt-3 mb-0 center">Pedidos completados</h4>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-5">
                                <a href="{{ route('generar') }}"
                                 target="_blank">
                                    <img src="/assets/images/crear.png" alt="Booking Reservation Form"
                                        class="img-thumbnail">
                                    <h4 class="d-block mt-3 mb-0 center">Generar pedido</h4>
                                </a>
                            </div>
                        </div>

                    </div><!-- .postcontent end -->
                </div>
            </div>
        </div>
    </section><!-- #content end -->



@endsection
@section('scripts')

@endsection
