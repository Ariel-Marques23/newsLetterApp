<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="style.css">
    <title>Newsletter front</title>
</head>
<body class="antialiased">
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
                <input type="text" name="title" id="title">

                <h3>Noticia:</h3>
                <textarea name="message" id="message" cols="30" rows="10" class="campoNoticia"></textarea>

                <button class="button1" id="submitBtn" type="button">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
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
    <script src="{{ asset("assets/script.js") }}"></script>
</body>
</html>
