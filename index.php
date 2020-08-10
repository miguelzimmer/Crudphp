<?php
    require_once 'class/produtos.php';
    $p = new Produtos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    

    <title>Crud</title>
</head>
<body>
    <div class="container">
        <form method="POST" class="form-login">
            <h2 class="form-login-heading">Cadastre o CEP</h2>
                <div class="form-group">
                    <input type="number" id="cepOrigem" placeholder="Cep Remetente" class="form-control" maxlength="10" name="cepOrigem" required>
                </div>
                <div class="form-group">
                    <input type="number"  id="cepDestino" name="cepDestino" class="form-control" placeholder="Cep Destinatário" maxlength="10" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" value="Cadastrar" class="btn  btn-lg btn-success login_btn">
                </div>
            </form>    
        
        <table id="produtos" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>CEP Origem</th>
                    <th>CEP Destino</th>
                </tr>
            </thead>    
        </table>
        <script src="scripts/produtos.js"> </script>
   </div>
   <?php
// vereficar se a pessa clicou no botao
if(isset($_POST['cepOrigem']))
{
   $cepOrigem = addslashes($_POST['cepOrigem']);
   $cepDestino = addslashes($_POST['cepDestino']);


   $p->conectar("crud","localhost","root","");
   if($p->msgErro == "")
   {
        if($p->cadastrar($cepOrigem,$cepDestino))
            {   
                ?>
                <div>Cadastro feito com sucesso!</div> 
                <?php
            }
            else
            {
                ?>
                 <div >Email já cadastrado!</div>
                <?php
            }
        }
    }
?>

</body>
</html>
