@extends('layouts.layout') @section('Nombre', 'Completados')
@section('contenido')
<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
                    <h1>Pedidos completados</h1>

					<div class="table-responsive">
						<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Productos</th>
									<th>Fecha de encargo</th>
									<th>Fecha de entrega</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

@endsection
@section('scripts')

@endsection
