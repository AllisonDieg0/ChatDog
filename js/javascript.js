function comentar(id, value) {
    document.location.reload();
    while (value.includes("/")) {
        value = value;
        value = value.replace("/", "\n");
    }

    var texto = prompt(value + " \nComentar:");
    if (texto != "") {        
        $(document).ready(function () {
            $(function () {
                
                $.ajax({
                    type: "POST",
                    url: "comentar.php",
                    data: {
                        id: id,
                        texto: texto
                    },
                    dataType: "json"
                });
            });
        });
        document.location.reload();
    }
}
/*try {
    $(function () {
        console.log(id);
        var coment = document.querySelector("#coment" + id + " .filesPost");
        num_coment = document.querySelector("#coment" + id + ".actionBtnPost p");
        botao = document.querySelector("#coment" + id + ".actionBtnPost button");
        console.log(coment);
        num_coment.innerHTML = parseInt(num_coment.innerHTML) + 1;
        coment.innerHTML = "Comentar";
        coment.style.backgroundColor = "red";

        $(document).ready(function () {
            $.ajax({
                url: "comentar.php",
                type: "POST",
                data: {
                    id: id,
                },
                dataType: "json"
            });
        });
    });
   
}

catch (err) {
    console.log(err);
} */





function likear(id) {
    try {
        $(function () {
            console.log(id);
            var like = document.querySelector("#like" + id + " .filesPost");
            num_like = document.querySelector("#like" + id + ".actionBtnPost p");
            botao = document.querySelector("#like" + id + ".actionBtnPost button");
            if (like.style.backgroundColor != "red") {
                console.log(like);
                num_like.innerHTML = parseInt(num_like.innerHTML) + 1;
                like.innerHTML = "Curtir";
                like.style.backgroundColor = "red";

                $(document).ready(function () {
                    $.ajax({
                        url: "likear.php",
                        type: "POST",
                        data: {
                            id: id,
                            result: 'true'
                        },
                        dataType: "json"
                    });
                });
            }
            else {
                console.log(num_like);
                num_like.innerHTML = parseInt(num_like.innerHTML) - 1;
                like.style.backgroundColor = "white";
                like.innerHTML = "Curtir";
                $(document).ready(function () {
                    $.ajax({
                        url: "likear.php",
                        type: "POST",
                        data: {
                            id: id,
                            result: 'false'
                        },
                        dataType: "json"

                    });
                });
            }

        });
    }

    catch (e) {
        console.log(e);
    }
}



