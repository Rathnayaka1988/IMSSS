
    <div id="titulo">
      <div id="tex">Carnet Virtual IMSS</div>
    </div>
    <br>
    <div id="back">
      <section id="izq">
        <div align="center">
          <img src="<?=base_url()?>Resources/img/hospital.png"></img>
          <br><br>
          <img src="<?=base_url()?>Resources/img/logo.png"></img>
        </div>
        <br>
      </section>
      <aside id="der">
        <p>
          <h3>Bienvenido a tu Carnet Virtual | IMSS</h3>
        </p>
        <br>
        <p>
          <h5>Unidad: HGZ No 1 Pachuca Hgo</h5>
        </p>
        <div align="center">
          <img id="cruz" src="<?=base_url()?>Resources/img/cruz.png"></img>
        </div>
        <br>

        <ul id="beneficios">
          <li>
            Podras ver tus consultas pendientes
          </li>
          <li>
            Consultas pasadas
          </li>
          <li>
            Estudios de laboratorio pendientes
          </li>
          <li>
            Y datos personales
          </li>
        </ul>
        <p>
          Unicamente escribiendo a continuación tu numero de Seguro Social
        </p>
        <div align="center">
          <form>
            <input type="text" class="form-control" style="width: 200px"
              placeholder="No. Seguro Social" required />
            <br>
            <input type="button" class="btn" value="Buscar" id="search"/>
          </form>
        </div>
        <br>
      </aside>
    </div>
    <br><br>
  </body>
</html>
