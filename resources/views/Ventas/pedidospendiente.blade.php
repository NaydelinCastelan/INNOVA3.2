@extends('layouts.layout') @section('Nombre', 'Pendientes')
@section('contenido')
<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
                    <h1>Pedidos pendientes</h1>

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
									<td>Naydelin Castelan</td>
									<td>2 lonas de vinil grandes</td>
									<td>Lona vinil G</td>
									<td>2022/02/04</td>
									<td>2022/03/04</td>
									<td>$800</td>
								</tr>
                                <tr>
									<td>Laura Hernández</td>
									<td>2 lonas de vinil chicas</td>
									<td>Lona vinil G</td>
									<td>2021/10/04</td>
									<td>2022/01/01</td>
									<td>$400</td>
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
