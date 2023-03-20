<?php
    session_start();
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

    if(isset($_POST['submit'])){
        include_once('conexao.php');
        
        if(is_null($_POST['name']) or is_null($_POST['email']) or is_null($_POST['phone']) or is_null($_POST['interest'])){
            echo "Todos os campos são obrigatórios! Você deve preenchê-los.";
        }
        else{
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $telefone = $_POST['phone'];
            $interesse = $_POST['interest'];

            $result = mysqli_query($conexao, "INSERT INTO USUARIOS(NOME, EMAIL, TELEFONE, INTERESSE) VALUES ('$nome', '$email', '$telefone', '$interesse')");
    
            if($result){
                echo "Sucesso! Sua inscrição foi realizada. Aguarde os detalhes no email.";  
            }
            else{
                echo "Houve um erro em sua inscrição, tente novamente mais tarde.";  
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InDecor</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css"/>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<script>
    function rowPage(){
        document.getElementById('event-description').scrollIntoView({ behavior: 'smooth' });
    }
</script>
<body>
    <form action="formulario.php" method="POST">
        <header id="event-description">
            <div id="disclaimer">
                <h2>InDecor</h2>
                <p class="about-event">
                    Um evento para revolucionar a sua criatividade
                </p>
                <p>Data do evento:</p>
                <p class="event-date">Domingo, 28 de maio, a partir das 14h</p>
            </div>
            <div id="subscription-form">
                <p>Preencha o formulário para receber detalhes do evento</p>
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="mail" name="email" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" name="phone" id="phone" placeholder="Número do Whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="interest">Principal interesse</label>
                        <select name="interest" id="interest">
                            <option value="" disabled selected>Selecione</option>
                            <option value="apartamentos">Apartamentos</option>
                            <option value="casas">Casas</option>
                            <option value="jardins">Jardins</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <button class="btn" name="submit" id="submit" type="submit">Quero me inscrever</button>
                </form>
            </div>
        </header>

        <section id="key-benefits">
            <h2>O que você vai aprender:</h2>
            <div class="benefits">
                <div class="benefit">
                    <div id="benefit-1" class="benefit-img"></div>
                    <p>Lorem ipsum</p>
                </div>
                <div class="benefit">
                    <div id="benefit-2" class="benefit-img"></div>
                    <p>Lorem ipsum</p>
                </div>
                <div class="benefit">
                    <div id="benefit-3" class="benefit-img"></div>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </section>

        <section id="location">
            <div id="address">
                <i class="bi bi-geo-alt-fill"></i>
                <div id="address-details">
                    <p>Rua do evento, 1333</p>
                    <p>Bairro teste</p>
                    <p>Abertura: 14h</p>
                </div>
            </div>
            <div id="about-location">
                <h3>Local de destaque</h3>
                <p>
                    O evento será realizado em um local prestigiado pelos amantes de Desing de Interiores, onde teremos exemplos de vários ambientes, tanto internos como externos.
                </p>
            </div>
        </section>
        <section id="details">
            <div class="detail" id="detail-1">
                <img src="img/hrz-3.jpg" alt="Sala decorada em tons claros">
                <div class="detail-description">
                    <h3>Conheça os ambientes que você vai aprender a decorar!</h3>
                </div>
            </div>
            <div class="detail" id="detail-2">
                <div class="detail-description">
                    <h3>Detalhes</h3>
                    <ul>
                        <li>Posicionamento</li>
                        <li>Aproveitamento de espaço</li>
                        <li>Combinação de cores</li>
                        <li>Organização</li>
                        <li>E muito mais...</li>
                    </ul>
                </div>
                <img src="img/hrz-4.jpg" alt="Sala de jantar decorada">
            </div>
            <div class="detail" id="detail-3">
                <img src="img/hrz-5.jpg" alt="Sala decorada em tons escuros">
                <div class="detail-description">
                    <h3>Objetos</h3>
                    <ul>
                        <li>Cadeiras</li>
                        <li>Mesas</li>
                        <li>Espelhos</li>
                        <li>Plantas</li>
                        <li>Cortinas</li>
                        <li>E muito mais...</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="cta">
            <h3>Gostou? Então não perca!</h3>
            <button class="btn" onclick="rowPage()">Preencher o formulário</button>
        </section>
        <footer id="footer">
            <h3>InDecor</h3>
            <p>A evolução da decoração de interiores</p>
            <p><span>Entre em contato:</span> oi@indecor.com.br</p>
            <p><span>Ou pelo telefone:</span> (55)99999-9999</p>
        </footer>
    </form>
</body>
</html>