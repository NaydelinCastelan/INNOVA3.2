@extends('layouts.layout') @section('Nombre', 'Almacen')
@section('contenido')
<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
                    <h1>Generar pedido</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputnombre3" class="col-sm-2 col-form-label">Cliente</label>
                            <div class="col-sm-10">
                                <input type="nombre" class="form-control" id="inputnombre3" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Productos</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option>Lona vinil</option>
                                    <option>Luces led</option>
                                    <option>Espectacular</option>
                                    <option>Faro</option>
                                    <option>Lona plastica</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnombre3" class="col-sm-2 col-form-label">Cantidad</label>
                            <div class="col-sm-10">
                                <input type="nombre" class="form-control" id="inputnombre3" placeholder="Cantidad">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnombre3" class="col-sm-2 col-form-label">Fecha encargo</label>
                            <div class="col-sm-10">
                                <input type="nombre" class="form-control" id="inputnombre3" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnombre3" class="col-sm-2 col-form-label">Fecha entrega</label>
                            <div class="col-sm-10">
                                <input type="nombre" class="form-control" id="inputnombre3" placeholder="dd/mm/aaaa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Realizar pedido</button>
                            </div>
                        </div>
                    </form>



				</div>
			</div>
		</section><!-- #content end -->

@endsection
@section('scripts')

@endsection
