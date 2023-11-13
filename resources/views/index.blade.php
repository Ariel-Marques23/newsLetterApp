<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">
        <title>News letter front</title>
    </head>
        <body class="antialiased">
            <button class="collapsible square">Historico de noticias</button>

            <form action="/news" method="post">
            @csrf 
                <div class="content">
                    <h4>Titulo:</h4>
                    <p>Noticia:</p>
                </div>
                <div class="center">
                    <div>
                        <h1>Envio de noticias</h1>
                    </div>
                    <div>
                    <h3>Titulo:</h3>
                        <input type="text" name="title" id="">

                        <h3>Noticia:</h3>
                        <textarea name="message" id="" cols="30" rows="10" class="campoNoticia"></textarea>

                        <button class="button1" type="submit">Enviar</button>
                    </div>
                </div>
            </form>

                <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;

                    for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;

                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                        console.log(content.style.display);
                    });
                    }
                </script>

        </body>
    </html>
