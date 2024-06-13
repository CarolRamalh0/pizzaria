<!DOCTYPE html>
<html lang="pt-br">

<head>

    <script src="app.js"></script>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Delights - Uma Experiência de Sabor com Código!</title>
</head>

<body>

    <header>
        <h1>Java Delights</h1>
        <nav>
            <a href="#cardapio"></a>Cardápio</a>
            <a href="#pedido">Pedido</a>
        </nav>
    </header>

    <main>


        <section class="modulo parallax parallax-1">

            <h1>Java Delights Pizzaria</h1>

        </section>
        <section class="cards-container">
            <div class="cards-pizza-title">
                <h3 id="cardapio">Pizzas Salgadas</h3>
            </div>
            <div class="card">
                <div class="card-img">


                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>

                <div class="card-desc">
                    <h3>Margherita Main() </h3>
                    <p>A pizza principal que todos adoram, como o método main() em Java.
                    </p>
                    <p>Ingredientes: Molho de tomate, mussarela, manjericão.
                    </p>

                </div>
            </div>
            <div class="card">
                <div class="card-img">


                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>

                <div class="card-desc">
                    <h3>Pepperoni Println()</h3>

                    <p>Uma explosão de sabor, assim como System.out.println() imprime diretamente na
                        tela.
                    </p>
                    <p>Ingredientes: Molho de tomate, mussarela, pepperoni.
                    </p>

                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>

                <div class="card-desc">
                    <h3>Vegetariana Void</h3>

                    <p>Uma opção saudável e leve, sem carne, tal como o tipo void que não retorna nada.
                    </p>
                    <p>Ingredientes: Molho de tomate, mussarela, pimentão, cebola, azeitonas, cogumelos.
                    </p>

                </div>
            </div>
            <div class="cards-pizza-title">
                <h3>Pizzas Doces</h3>
            </div>
            <div class="card">
                <div class="card-img">


                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>

                <div class="card-desc">
                    <h3>Nutella New </h3>
                    <p>Uma nova experiência de sabor a cada mordida, assim como o operador new em Java.

                    </p>
                    <p>Ingredientes:Massa doce, Nutella, avelãs.

                    </p>

                </div>
            </div>
            <div class="card">
                <div class="card-img">

                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>

                <div class="card-desc">
                    <h3>Banana Split Break</h3>

                    <p>Uma sobremesa que quebra a rotina, como o comando break em Java.
                    </p>
                    <p>Ingredientes: Massa doce, banana, sorvete de creme, calda de chocolate, cereja.
                    </p>

                </div>
            </div>
            <div class="card">
                <div class="card-img">


                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGl6emF8ZW58MHx8MHx8fDI%3D"
                        alt="">
                </div>
                <div class="card-desc">
                    <h3>Chocolate Class</h3>

                    <p>Descrição: Uma delícia estruturada e clássica, assim como uma class em Java.
                    </p>
                    <p>Ingredientes: Massa doce, ganache de chocolate, morangos frescos.
                    </p>

                </div>
            </div>



        </section>
        <section class="order-form">
            <h2 id="pedido">Faça seu pedido</h2>

            <form action="" method="post">
                <label for="">Nome Completo:</label><br>
                <input type="text" name="" id="nome"><br>
                <label for="">Endereço:</label><br>
                <input type="text" name="" id="endereco" ><br>
                <label for="">Telefone:</label><br>
                <input type="text" name="" id="telefone" ><br>
                <label for="">CPF:</label><br>
                <input type="text" name="" id="cpf" ><br>
                <label for="">E-mail:</label><br>
                <input type="email" name="" id="email"><br>

            </form>

            <!-- ----------------------------------------------------------------------------------- -->

            <form action="" method="post">

                <label for="">Escolha sua pizza:</label><br>

                <select name="" id="sabor">
                    <option value="Nutella New">Nutella New</option>
                    <option value="Chocolate Class">Chocolate Class</option>
                    <option value="Banana Split Break">Banana Split Break</option>
                    <option value="Margherita Main">Margherita Main</option>
                    <option value="Pepperoni Println">Pepperoni Println</option>
                    <option value="Vegetariana Void">Vegetariana Void</option>
                </select><br><br>

                <label for="quantidade">Quantidade:</label>
                <input type="number" class="qnt-input" id="quantidade" placeholder="1"><br>
                <input type="submit" value="Enviar" class="btn-submit">
            </form>

        </section>



    </main>

    <footer>
        <h3>Localização:</h3>
        <p>Localização fantasia</p>

        <h3>Horários:</h3>
        <p>das 17:00h as 23:00h</p>

        <h3>Contato:</h3>
        <p>(51) 90000-0000</p>
        <p>pizzaria@central.com</p>

    </footer>


    <?php

    // Configuração servidor
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pizzaria_java_delights";

    // Conexão com My SQLI
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    echo "Sucesso!";

    // Variáveis usuários
    
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    // Inserção usuários php
    
    $sql1 = $conn->prepare("INSERT INTO clientes_tb (nome, endereco, telefone, cpf, email) VALUES ($nome, $endereco, $telefone, $cpf, $email)");

    if ($sql1->execute()) {
        echo "Novo cliente inserido com sucesso";
    } else {
        echo "Erro ao inserir pedido: " . $sql1->error;
    }


    // Variáveis pedidos
    
    $sabor = $_POST['sabor'];
    $quantidade = $_POST['quantidade'];
    $data_pedido = date("Y-m-d");


    // Inserção no MYSQL de um novo pedido
    
    $sql = $conn->prepare("INSERT INTO pedidos_tb (sabor,data_pedido,quantidade) VALUES ($sabor,$data_pedido, $quantidade)");


    if ($sql->execute()) {
        echo "Novo pedido inserido com sucesso";
    } else {
        echo "Erro ao inserir pedido: " . $sql->error;
    }


    $sql->close();
    $sql1->close();
    $conn->close();

    ?>



</body>

</html>