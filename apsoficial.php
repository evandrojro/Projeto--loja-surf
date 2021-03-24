<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <?php require_once 'navbar.php' ?>

</head>
<body>
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-12 col-md-2 col-xl-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pranchas</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Quilhas</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Leash</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Suporte</a>
              </div>
            </div>
            <div class="col-12 col-md-10 col-xl-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top" src="img/prancha.jpg" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Prancha Gabriel Medina</h5>
                            <p class="card-text">Esta é a prancha utilizada por Gabriel Medina no circuito mundial WCT.</p>
                            <p class="card-text"><small class="text-muted">Modelo 2020</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="img/joker.jpg" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Modelo Joker</h5>
                            <p class="card-text">Este é o modelo conhecido como Joker, um modelo que vai te dar bastante velocidade, perfeito para manobras.</p>
                            <p class="card-text"><small class="text-muted">Modelo 2019</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="img/evandro.jpg" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title">Modelo Evandro</h5>
                            <p class="card-text">Este é um modelo criado especialmente para o nosso atleta Evandro Junior, o qual utilizou no circuito mundial.</p>
                            <p class="card-text"><small class="text-muted">Modelo 2020</small></p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/filipetoledo.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Quilha modelo filipe toledo</h5>
    <p class="card-text">aqui temos uma quilha utilizada pelo surfista filipe toledo</p>
    <a href="#" class="btn btn-primary">R$199</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/quilhaevandro.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Quilha Evandro junior</h5>
    <p class="card-text">Quilha utilizada pelo nosso atleta mais gordinho do circuito, se você é gordinho e quer surfar tambem essa é ideal .</p>
    <a href="#" class="btn btn-primary">R$99</a>
  </div>
</div>
</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/leashsoul.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Leash soulfins</h5>
    <p class="card-text">Leash produzido em territorio nacional.</p>
    <a href="#" class="btn btn-primary">R$120</a>
  </div>
</div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email de login</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Qual o seu problema?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Meu produto chegou danificado</option>
      <option>Meu produto chegou errado</option>
      <option>Meu produto não chegou</option>
      <option>Alterar endereço de entrega</option>
      <option>Outro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descreva seu problema.</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Enviar!!
</button>
  </div>
</form></div>
              </div>
            </div>
          </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>