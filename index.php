<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Desenhando na canvas</title>
</head>

<body>
    <canvas id="quadro" style="background:#fff; border:dotted"></canvas>
    <button id="limparAssinatura">Limpar</button>
</body>
<script>
    window.onload = function() {
        let limparAssinatura = document.getElementById("limparAssinatura");
        var largura =(window.screen.width-50);
        var altura = 300;


        var quadro = document.getElementById("quadro");
        quadro.setAttribute("width", largura);
        quadro.setAttribute("height", altura);

        var ctx = quadro.getContext("2d");
        limparAssinatura.addEventListener("click", e=>{
            ctx.clearRect(0, 0, quadro.width, quadro.height);
            ctx.beginPath();
        })
        var desenhando = false;

        quadro.onmousedown = function(evt) {
            
            ctx.moveTo(evt.clientX, evt.clientY);
            desenhando = true;
        }
        quadro.onmouseup = function() {
            desenhando = false;
        }
        quadro.addEventListener("touchstart", evt=>{
            
            ctx.moveTo(evt.targetTouches[0].clientX, evt.targetTouches[0].clientY);
            desenhando = true;
        });
        quadro.addEventListener("touchmove", evt=>{
            
            if (desenhando) {
                ctx.lineTo(evt.targetTouches[0].clientX, evt.targetTouches[0].clientY);
                ctx.stroke();
            }
            //console.log(e.clientX);

        });
        quadro.addEventListener("touchend",evt=>{
            desenhando = false;
        });
        
        quadro.onmousemove = function(evt) {
            if (desenhando) {
                ctx.lineTo(evt.clientX, evt.clientY);
                ctx.stroke();
            }
        }
    }
</script>

</html>