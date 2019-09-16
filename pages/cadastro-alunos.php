<!doctype html>
<html lang="pt-br">
  <head>
  <?php include("head.php");?>
  <link rel="stylesheet" href="../style/Style.css" type="text/css">
    <title>FATEC - Biblioteca</title>
  </head>
  <body>
  <?php include("header.php");?>
        <div class="container">
        <div class="navbar">
            <ul>
              <a href="cadastro-livros.php"><li>Cadastro de livros</li></a>
              <li>Cadastro de alunos</li>
              <li>Imprestimo</li>
              <li>Devolução</li>
              <li>Consulta</li>
              <li>Histórico</li>
              <li>Perfil</li>
            </ul>
          </div>
          </div>
          <div class="conteudo">

<div class="formdiv">
  <form>
 
          <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
      <input type="Name" class="form-control" id="inputName" placeholder="João da Silva">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="joaodasilva@exemplo.com">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Senha:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputRA" class="col-sm-2 col-form-label">RA:</label>
    <div class="col-sm-10">
      <input type="Name" class="form-control" id="inputRA" placeholder="2900831813042">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Curso:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridCurso" id="gridCurso" value="option1">
          <label class="form-check-label" for="gridCurso">
            Sistemas p/ Internet
          </label>
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridCurso" id="gridCurso1" value="option2">
          <label class="form-check-label" for="gridCurso1">
            Gestão Empresarial
          </label>
        </div>

        
      </div>
    </div>
  </fieldset>
  <div class="btns">
  <button class="btn btn-danger" type="submit">Cadastar</button>
  <button class="btn btn-danger" type="reset">Limpar</button>
</div>
  </form>

    <div class="profilepic">
        <img class="img-thumbnail img-fluid" src="../images/profile.jpg" alt="Profile Picture">
    </div>


          </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>