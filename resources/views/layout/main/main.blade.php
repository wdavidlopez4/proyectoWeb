@extends("template.template")


@section("contenido")

<!-- seccion home -->
<section id="home">

  <img src="https://media.istockphoto.com/vectors/welcome-banner-speech-bubble-vector-id918027748?k=6&m=918027748&s=612x612&w=0&h=SkttYJtrHijM7Yj7XWu2ZCavl36qvErkVnOogsLR8uA=" width ="100%" height = "auto">

</section>


<!-- seccion portafolio -->
<section id="portafolio">

  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre de las instituciones</th>
      <th scope="col">formaciones</th>
      <th scope="col">experiencias</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fundacion univerditaria panamaricana</td>
      <td>estudiante de ingenieria de software</td>
      <td>NN</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Fundacion univerditaria panamaricana</td>
      <td>tecnico profecional en desarrollo de software</td>
      <td>6 meses</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> colspan="2">universidad tecnologica y pedagogica de colombia</td>
      <td>tecnico ballicher</td>
      <td>NN</td>
    </tr>
  </tbody>
</table>

</section>


<!-- seccion biografia -->
<section id="biografia">

  <dl class="row">
  <!-- info personal -->
  <dt class="col-sm-3">informacion personal</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nombre:</dt>
      <dd class="col-sm-8">william david lopez sanchez</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-4">telefono:</dt>
      <dd class="col-sm-8">315 750 8858</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-4">direccion</dt>
      <dd class="col-sm-8">carrera 18 N 32 94</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-4">correo:</dt>
      <dd class="col-sm-8">wdavidlopez4@gmail.com</dd>
    </dl>
  </dd>

  <!-- info academica -->
  <dt class="col-sm-3">informacion academica</dt>
  <dd class="col-sm-9">
    <p>Estudiante de ingeniería de software en séptimo semestre de la universidad Unipanamericana, técnico profesional en desarrollo de software, también, técnico bachiller en computación y redes, he realizado deferentes cursos en programación introductorios a JEE, POO, Python y metodologías. Poseo seis meses de prácticas en la fundación universitaria Unipanamericana en donde aprendí el trabajo en equipo y el autoaprendizaje. Soy una persona joven con ganas de trabajar y aprender, por lo cual soy autodidacta, me gusta y se me facilita hacer amigos, me gusta lo que hago y soy perfeccionista en ello.</p>
  </dd>

  <!-- otra informacion -->
  <dt class="col-sm-3">otra informacion</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">otros estudios</dt>
      <dd class="col-sm-8">técnico profesional en desarrollo de software </dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-4">otros cursos</dt>
      <dd class="col-sm-8">introducción JAVA EE 7</dd>
    </dl>


  <!-- gustos -->
  <dt class="col-sm-3">gustos</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">entretenimientos</dt>
      <dd class="col-sm-8">musica, deporte y eventos sociales</dd>
    </dl>
  </dd>
</dl>

</section>



<!-- contacto -->
<section id="contacto">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="telefono">telefono</label>
      <input type="text" class="form-control" id="telefono" placeholder="cellular/telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="direccionP">direccion principal</label>
    <input type="text" class="form-control" id="direccionP" placeholder="cll 12 N x12">
  </div>
  <div class="form-group">
    <label for="direccionS">direccion segundaria</label>
    <input type="text" class="form-control" id=direccionS placeholder="cll 12 N x12">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="ciudad">Ciudad</label>
      <input type="text" class="form-control" id="ciudad">
    </div>
    <div class="form-group col-md-4">
      <label for="sexo">sexo</label>
      <select id="sexo" class="form-control">
        <option selected>hombre</option>
        <option>mujer</option>
        <option>indefinido</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="formacion">formacion academica</label>
      <input type="text" class="form-control" id="formacion">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="estranjero">
      <label class="form-check-label" for="estrajero">
        es extranjero
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">emviar</button>
</form>
</section>
@endsection