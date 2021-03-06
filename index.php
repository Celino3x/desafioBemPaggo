<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Formulário para compra de Pacotes</title>
</head>
<body>

    <div class="container">

        <div class="titulo">
            <h3>Formulário <br> para compra de <br> <span class="enfase">Pacote de Adesivos</span></h3>
        </div>

        <div class="form">

            <!--QUAIS ADESIVOS-->

            <h5>Quais Adesivos:</h5>

            <!--CHECKBOX-->

           <form action="checkout.php" method="post">
            <div class="form-check">
                <input class="form-check-input" name="check[]" type="checkbox" value="React" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  React
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="check[]" type="checkbox" value="Vue" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Vue
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="check[]" type="checkbox" value="Angular" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Angular
                </label>
              </div>

              <!--QUANTOS ADESIVOS DE CADA-->

              <div class="quant">
                <h5>Quantos adesivos de cada?</h5>
                <button type="button" id="remover" class="remove btn btns">-</button>
                <input type="number" name="quantidade" id="quantidade" class="quantidade" value="0"/>
                <button type="button" id="add" class="add btn btns">+</button>
              </div>

              <!--OBS-->

              <div class="mb-3 divObs">                
                <label for="" class="obs">Observações</label>
                <textarea class="formControl" name="obs" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <!--ENVIAR-->

              <div class="sendForm">
                <button type="submit" id="enviar" class="remove btn btnSend">Enviar</button>
              </div>

           </form> 
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
<?php
?>