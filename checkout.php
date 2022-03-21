<?php
   $check = $_POST['check'];
   $quantidade = $_POST['quantidade'];

   $obs = $_POST['obs'];

   $valor = 15.0;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Formulário para compra de Pacotes</title>
</head>
<body>

    <div class="container checkoutContainer">
        
        <div class="titulo">
            <h3><i class="bi bi-cart-check"></i> Checkout</h3>
        </div>

        <div class="row">

            <div class="col-10">
                <h4>Confira Itens Selecionados</h4>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Itens</th>
                    </tr>
                </thead>
                
                <tbody>
                    <td>
                        <?php
                            foreach($_POST['check'] as $value)
                                {
                                    echo $value.'<br>';
                                }
                        ?>
                    </td>
                    <td>
                        <?php
                           echo $quantidade.' x '.$valor;
                        ?>
                    </td>
                </tbody>
            </table>

            <div class="col-6">
                <h4>Total</h4>
                <div>
                    <?php 
                        $somarCompras = $quantidade * $valor;
                        echo "R$: " . number_format($somarCompras,2,",",".");
                    ?>
                </div>
            </div>

            <div class="col-4">
                <h4>Observações</h4> <br>
                <div>
                    <?php echo $obs; ?><br>
                </div>
            </div>
                
        </div>

        
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
<?php
?>