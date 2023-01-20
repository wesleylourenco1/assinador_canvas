
    window.onload = function() {
        let limparAssinatura = document.getElementById("limparAssinatura");
        var largura = (window.screen.width);
        var altura = 300;


        var quadro = document.getElementById("quadro");
        console.log(quadro.getBoundingClientRect().x, quadro.clientHeight);
        quadro.setAttribute("width", largura - 100);
        quadro.setAttribute("height", altura);

        var ctx = quadro.getContext("2d");
        limparAssinatura.addEventListener("click", e => {
            ctx.clearRect(0, 0, quadro.width, quadro.height);
            ctx.beginPath();
        })
        var desenhando = false;

        quadro.onmousedown = function(evt) {

            ctx.moveTo(evt.clientX - quadro.getBoundingClientRect().x, evt.clientY - quadro.getBoundingClientRect().y);
            desenhando = true;
        }
        quadro.onmouseup = function() {
            desenhando = false;
        }
        quadro.addEventListener("touchstart", evt => {

            ctx.moveTo(evt.targetTouches[0].clientX - quadro.getBoundingClientRect().x, evt.targetTouches[0].clientY - quadro.getBoundingClientRect().y);
            desenhando = true;
        });
        quadro.addEventListener("touchmove", evt => {

            if (desenhando) {
                ctx.lineTo(evt.targetTouches[0].clientX - quadro.getBoundingClientRect().y, evt.targetTouches[0].clientY - quadro.getBoundingClientRect().y);
                ctx.stroke();
            }
            //console.log(e.clientX);

        });
        quadro.addEventListener("touchend", evt => {
            desenhando = false;
        });

        quadro.onmousemove = function(evt) {
            if (desenhando) {
                ctx.lineTo(evt.clientX - quadro.getBoundingClientRect().x, evt.clientY - quadro.getBoundingClientRect().y);
                ctx.stroke();
            }
        }
    }