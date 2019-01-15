<fieldset class="mt-5 col-12 mx-auto col-sm-4 card p-3 shadow mb-5 bg-white rounded">
  <legend class="text-center font-weight-bold">Registro</legend>
  <form action="cadastrar.php" method="post">
    <div class="form-group">
      <label for="iNome">Nome</label>
      <input type="text" id="iNome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="iEmail">Email</label>
      <input type="email" id="iEmail" name="txtEmail" placeholder="Informe o email" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="iMatricula">Matrícula</label>
      <input type="number" id="iMatricula" name="txtMatricula" placeholder="Informe a matrícula" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="iCurso">Curso</label>
      <input type="text" id="iCurso" name="txtCurso" placeholder="Informe o curso" class="form-control" required>
    </div>
    <div>
      <button class="btn btn-dark btn-block col-12 col-sm-3">Registrar</button>
    </div>
  </form>
</fieldset>
