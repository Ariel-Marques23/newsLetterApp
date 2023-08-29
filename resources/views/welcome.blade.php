<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">
        <title>News letter front</title>
    </head>
        <body class="antialiased">

                <div class="center">
                    <div>
                        <h1>Envio de noticias</h1>
                    </div>
                    <div>
                    <h3>Titulo</h3>
                        <input type="text" name="texto" id="">

                        <h3>Noticia</h3>
                        <textarea name="" id="" cols="30" rows="10" class="campoNoticia"></textarea>

                        <button>Enviar</button>
                    </div>
                </div>
        </body>
    </html>
