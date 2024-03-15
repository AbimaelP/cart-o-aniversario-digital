<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=img, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Convite Lyanna</title>
</head>
<body>
    <div class="content_presenca_confirmada">
        <div id="content_text">LISTA DE CONVIDADOS</div>
        <div style="display: flex;justify-content:center;margin-top:7px;"><button onclick="sendLista()">ENVIAR</button></div>
    </div>

    <style>
        .content {
            height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(99deg, #beebf7 64%, #ffd4ed 90%);
        }

        .bg_convite {
            width: 100%;
        }
        .button_content {
            bottom: 50px;
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .btn_convite {
            padding: 8px;
            font-family: 'Roboto';
            font-weight: bold;
            border: none;
            border-radius: 5px;
            background-color: #f06ca1;
            color: #bfecf7;
        }

        .content_nome_convidado {
            display: none;
            align-items: center;
            justify-content: center;
            background-color: #323d3d5e;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .content_inputs {
            display: flex;
            flex-direction: column;
            align-items: end;
            padding: 0 30px;
            width: 100%;
        }
        .content_inputs input {
            height: 30px;
            width: 100%;
            border: none;
            padding: 5px;
            border-radius: 5px;
        }
        .btn_default {
            border-radius: 5px;
            padding: 5px;
            border: none;
            background-color: #f06ca1;
            font-family: 'Roboto';
            font-weight: bold;
            color: #ffff;
        }
        .content_inputs button {
            margin-top: 5px;
        }

        .content_presenca_confirmada {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-image: url('convite-2.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        .content_presenca_confirmada div {
            width: 220px;
            font-weight: bolder;
            text-align: center;
        }
        #content_text {
            display: flex;
            flex-direction: column;
            font-family: "Dancing Script";
        }
        
        .content_input_acompanhantes {
            display: none;
            flex-direction: column;
            align-items: center;
            background-color: #ffff;
            padding: 15px 20px;
            border-radius: 8px;
        }
    </style>
    <script>
        function sendLista(){
            const data = {
                lista_convidados: 'ok',
                // acompanhantes: acompanhantes
            }
            $.ajax({
                    type: "POST",
                    url: "api/sendMail.php", // Substitua pelo caminho correto do seu script PHP
                    data: JSON.stringify(data),
                    success: function(response) {
                        // Lida com a resposta do servidor
                        console.log(response);
                    },
                    error: function(error) {
                        // Lida com erros na requisição
                        console.log(error);
                    }
                });
        }
    </script>
</body>
</html>
