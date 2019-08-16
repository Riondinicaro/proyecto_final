<div class="search row pb-4">
				
				<div class="col-12">

					<form class="col-md-7 mx-auto">
					  <div class="form-row justify-content-center">

						<div class="cols-xs-12 col-md-4 my-2">
					      <select id="filtro" name="filtro" class="custom-select">
							
							<?php
								include_once( PATH_HELPERS . "/html_helper.php");

								echo getOptionsComboGeneros(true);
							?>

					      </select>
						</div>

						<div class="cols-xs-12 col-md-5 my-2">
					      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
						</div>

						<div class="my-2">
					      <button onclick="enviarBusqueda();" name="submit" type="button" class="btn btn-dark">Buscar</button>
						</div>
					  </div>
					</form>
				</div>
			</div>