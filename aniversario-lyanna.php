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
    
    <div class="content">
        <img src="conviter08.png" alt="convite" class="bg_convite">
        <div class="button_content">
            <button type="button" class="btn_convite" onclick="confirmarPresenca()">CONFIRMAR PRESENÇA</button>
        </div>
        <div class="content_nome_convidado">
            <div class="content_inputs">
                <input type="text" placeholder="Digite seu nome" value="" id="name" required>
                <button type="button" class="btn_default" onclick="presencaConfirmada()">Confirmar</button>
            </div>
            <!-- <div class="content_input_acompanhantes" id="tem_acompanhante">
                <div>Tem acompanhantes?</div>
                <div style="margin-top: 10px;">
                    <button class="btn_default" onclick="confirmarAcompanhantes(true)">Sim</button>
                    <button class="btn_default" onclick="confirmarAcompanhantes(false)">Não</button>
                </div>
            </div> -->
            <!-- <div class="content_input_acompanhantes" id="nome_acompanhante_content">
                <div style="display: flex;justify-content: center;"><span>Acompanhante </span><input type="text" id="nome_acompanhante" style="margin-left: 10px; border: 1px solid;" placeholder="Digite o nome"></div>
                <div style="margin-top: 10px; display: flex;justify-content: space-between; width: 100%;">
                    <button class="btn_default" onclick="definirAcompanhantes('nome_acompanhante')">Adicionar</button>
                    <button class="btn_default" onclick="confirmarAcompanhantes(false)">OK</button>
                </div>
            </div> -->

        </div>
    </div>
    <div class="content_presenca_confirmada">
        <div id="content_text"></div>
        <!-- <div style="margin-top: 15px; color: #a1c01c;" onclick="listaAcompanhantes()" class="btn_lista">Ver acompanhantes</div> -->
        <!-- <div style="display: none; margin-top: 15px; color: #a1c01c;" class="btn_convidado" onclick="confirmarAcompanhantes(false)">Voltar</div> -->
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
            display: none;
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
        // let acompanhantes = []
        let convidado_nome = ''
        const convidado = document.querySelector('.content_inputs')
        // const tem_acompanhante = document.getElementById('tem_acompanhante')
        const element_text = document.getElementById('content_text')
        const content_informacoes = document.querySelector('.content')
        const presencaConfirmadaContent = document.querySelector('.content_presenca_confirmada')


        function confirmarPresenca(){
            const element = document.querySelector('.content_nome_convidado')
            element.style.display = 'flex'
        }

        // function presencaConfirmada(){
        //     
        //     // tem_acompanhante.style.display = 'flex'
        // }

        function presencaConfirmada(confirmar){
            // if(confirmar){
            //     document.getElementById('tem_acompanhante').style.display = 'none'
            //     document.getElementById('nome_acompanhante_content').style.display = 'flex'
            // }else {
                // document.querySelector('.btn_convidado').style.display = 'none'
                // document.querySelector('.btn_lista').style.display = 'block'
                convidado.style.display = 'none'
                convidado_nome = convidado_nome ? convidado_nome : document.getElementById('name').value
                element_text.textContent = 'Aguardamos sua presença ' + convidado_nome
                content_informacoes.style.display = 'none'
                presencaConfirmadaContent.style.display = 'flex'
            // }

            if(convidado_nome)
                sendMail()
        }

        // function definirAcompanhantes(id){
        //     const nome = document.getElementById(id)
        //     acompanhantes.push(nome.value)
        //     window.alert(nome.value + ' adicionado')
        //     nome.value = ''
        // }

        // function listaAcompanhantes(){
        //     const content_text = document.getElementById('content_text')
        //     document.querySelector('.btn_convidado').style.display = 'block'
        //     document.querySelector('.btn_lista').style.display = 'none'
        //     content_text.innerHTML = ''
        //     for(let i in acompanhantes){
        //         content_text.innerHTML += `<div style="margin-top:5px;">${acompanhantes[i]}</div>`
        //     }
        // }
        
        function sendMail(){
            const data = {
                convidado: convidado_nome,
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
