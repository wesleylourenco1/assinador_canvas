<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="src/estilo.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Desenhando na canvas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Leia atentamente o contrato abaixo:</h2>

            </div>

        </div>

        <iframe src="exemplo.pdf" id="iframepdf" height="350"></iframe>
        <div class="row alert alert-info">
            <div class="col-sm-8 small" role="alert">
                Caso concorde com o contrato assine no quadro abaixo e digite o código recebido via SMS no número: 41 99999-9999:
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" maxlength="5">
            </div>
        </div>


        Enviar contrato assinado por e-mail: Digite seu e-mail: <input type="email" class="form-control" name="emial" id="email">

        <canvas id="quadro" style=></canvas>
        <button id="limparAssinatura" style="background-color: red; border:none; align-items: center; align-content: center;">Limpar</button>
        <button id="salvar" style="background-color: aqua; border:none;align-items: center; align-content: center;">Lí e concordo</button>

        </p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="src/assinatura.js">
</script>

</html>