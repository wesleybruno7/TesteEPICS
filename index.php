<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
        
        <script src="https://kit.fontawesome.com/1f400e7c0b.js"></script>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
                
    </head>
    <body>
        <?php require_once 'process.php'; ?>
        
        <header class="bg-dark text-white p-3 mb-1">
            <div class="container-header">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <img id="logo" src="logo.png" alt="Logo">
                    </div>
                    <div class="col-md-10 text-center">
                        <h2 class="text-uppercase">Vendas</h2>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="bg-dark padding-body">
            <div class="container-body">
                <div class="row">
                    <div class="col-md-2 adjust-right-0">
                        <div class="card-group full-page-menu">
                            <div class="card " style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-primary">
                                        <h4 class="text-white">
                                            <i class="fas fa-caret-down"></i>
                                            <span class="left-space">Menu</span>
                                        </h4>
                                    </li>
                                    <li class="list-group-item bg-primary text-white">

                                        <a href="#" class="card-link text-white">
                                            <i class="fas fa-home"></i>
                                            <span class="left-space">Pagina inicial</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-primary text-white">
                                        <a href="#" class="card-link text-white">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span class="left-space">Meus pedidos</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-primary text-white">
                                        <a href="#" class="card-link text-white">
                                            <i class="fas fa-comments"></i>
                                            <span class="left-space">Fale conosco</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-bars"></i>
                                <span class="left-space">Meus os pedidos</span>
                            </div>
                        </div>

<!---------------------  inicio: Adicionar itens --------------------->
                        <div class="card mt-2 pt-3 pl-3 pr-3 text-center">
                            <form action="process.php" method="POST"> 
                                <div class="form-row">
                                    <div class="form-group col col-md-1">
                                        <input type="text" name="id" class="form-control text-center" placeholder="0" value="" readonly>
                                    </div>
                                    <div class="form-group col col-md-4">
                                        <input type="text" name="cliente" class="form-control" placeholder="Nome do cliente" value="">
                                    </div>
                                    <div class="form-groupcol col-md-4">
                                        <input type="text" name="produto" class="form-control" placeholder="Descricao do produto" value="">
                                    </div>
                                    <div class="form-groupcol col-md-2">
                                        <input type="text" name="valor" class="form-control text-right" id="dinheiro" placeholder="R$0,00" value="">
                                    </div>
                                    <div class="form-group col col-md-1">
                                        <button type="submit" class="btn btn-success" name="add-item">+</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<!--------------------- termina: Adicionar itens --------------------->
                        
<!--------------------- inicio: Listar itens ------------------->
                        
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'vendas') or die(mysqli_error($mysqli));
                        $result = $mysqli->query("SELECT * FROM pedidos") or die($mysqli->error);

                        //pre_r($result);
                        ?>
                        
                        <div class="card mt-2">
                            <div class="card-body remove-padding">
                                    <table class="table adjuste-table">
                                        <thead>
                                            <tr class>
                                                <th scope="col">Numero</th>
                                                <th scope="col">Cliente</th>
                                                <th scope="col">Produto</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="itens-lista">
                                            
                                        <?php 
                                            while ($row  = $result->fetch_assoc()){ ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['cliente']; ?></td>
                                                    <td><?php echo $row['produto']; ?></td>
                                                    <td><?php echo $row['valor']; ?></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-danger adjust-btn-padding"> - </button>
                                                    </td>
                                                </tr>
                                            <?php }; ?>
                                            
                                        </tbody>
                                    
                                    </table>
                                </div>
                                        
                                <?php
                                function pre_r($array){
                                    echo '<pre>';
                                    print_r($array);
                                    echo '</pre>';
                                }
                                ?>                                        

                        </div>

<!--------------------- termina: Listar itens ------------------->
                        
                        <footer>
                            <div class="card mt-2">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link adjust-btn-padding mt-2 active bg-primary text-white" href="#">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link adjust-btn-padding mt-2 " href="#">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link adjust-btn-padding mt-2 " href="#">3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link adjust-btn-padding mt-2 " href="#">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>   
        </section>
        
        <footer class="bg-dark text-white p-2 mt-1">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class=" font-italic">Copyright © 2019</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   
        <script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>
        
        <script src="js/index.js"></script>

    </body>
</html>