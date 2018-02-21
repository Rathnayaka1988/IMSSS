
		<div class="container">
			<div class="bb-custom-wrapper">

				<div id="bb-bookblock" class="bb-bookblock">

					<div class="bb-item">
						<div class="bb-custom-firstpage">

							<center>
			          <img src="<?=base_url()?>Resources/img/hospital.png"></img>
			          <br><br>
			          <img src="<?=base_url()?>Resources/img/logo.png"></img>
        			</center>

						</div>
						<div class="bb-custom-side" style="background: rgb(239, 239, 239);">

							<div class="bar">
			          <img class="bar" style="float:left" src="<?=base_url()?>Resources/img/hospital.png"></img>
			          <img class="bar" style="float:right" src="<?=base_url()?>Resources/img/logo.png"></img>
        			</div>
			        <p>
			          <h3 align="center">Carnet de citas</h3>
			        </p>
			        <p style="font-weight: bold">
			          Subdirreción de Atención al Usuario
			        </p>
			        <div class="informacion">
			          <p class="dato">
			            NOMBRE DEL PACIENTE: ____<?= $nombre ?>__________________
			          </p>
			          <p class="detalle">
			                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nombre(s)
			          </p>
			          <p class="dato">
			            _____________<?= $apellidoP ?> ______________<?= $apellidoM ?>_____________
			          </p>
			          <p class="detalle">
			              Apellido Paterno   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          Apellido Materno
			          </p>
			          <br>
			          <p class="dato">
			            CURP: ____________<?= $CURP ?>_____________________________
			          </p>
			          <p id="folio">
			            No. de CARNET:
			            <input type="text" id="noseguro" value="<?= $carnet ?>"/>
			          </p>
			          <p class="dato">
			            INFORMES CONMUTADOR: 59729800 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exts. 1121 y 1520
			          </p>
			        </div>
						</div>
					</div>

					<div class="bb-item">
						<div class="bb-custom-side">
							<div class="inform">
				        <div id="identificacion">
				          <p class="sec">
				            IDENTIFICACIÓN
				          </p>
				          <p>
				            GRUPO SANGUÍNEO Y RH
				          </p>
				          <p>
				            _________<?= $tipo ?>______________________
				          </p>
				          <p>
				            DATOS GENERALES
				          </p>
				          <p>
				            EDAD: ______ SEXO: F  M  ____<?= $fecha_nacimiento ?>_____<?= $descripcion ?>___________
				            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            FECHA DE NAC. Y LUGAR
				          </p>
				          <br>
				          <p>
				            DOMICILIO: ___<?= $direccion ?>___________________________________________________
				            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            CALLE Y No. COLONIA MUNICIPIO O DELEGACIÓN
				          </p>
				        </div>
				        <hr>
				        <div id="seguro">
				          <p class="sec">
				            SEGURO POPULAR
				          </p>
				        </div>
				        <div id="sello">
				          <table id="sell">
				            <tr class="limite">
				              <td class="firma">
				                NOMBRE Y FIRMA DE T.S.
				              </td>
				              <td class="firma2">
				                NOMBRE Y FIRMA DE T.S.
				              </td>
				            </tr>
				            <tr>
				              <td class="firma">
				                FECHA DE REALIZACIÓN
				              </td>
				              <td class="firma2">
				                FECHA DE REALIZACIÓN
				              </td>
				            </tr>
				            <tr>
				              <td class="firma">
				                NIVEL DE CLASIFICACIÓN:
				                <div class="cuadrado">
				                </div>
				              </td>
				              <td class="firma2">
				                NIVEL DE CLASIFICACIÓN:
				                <div class="cuadrado">
				                </div>
				              </td>
				            </tr>
				          </table>
				        </div>
				      </div>
						</div>
						
