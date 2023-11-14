$("#submitBtn").click(() => {
    $.ajax({
        type: "POST",
        url: "/news",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            title: $("#title").val(),
            message: $("#message").val(),
        },
        dataType: "JSON",
        success: function (response) {
            console.log(response);
            Swal.fire({
                title: 'Sucesso!',
                text: 'Você enviou a notícia!',
                icon: 'success',
            })

        },
        error: function(err) {
            
            Swal.fire({
                title: 'Erro!',
                text: 'Erro ao enviar notícia!',
                icon: 'error',
            })
        }
    });
});