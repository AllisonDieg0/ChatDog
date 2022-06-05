/*fazer conexao com o banco petbook*/


function likear(id) {
    try{

    console.log(id);
    var like = document.querySelector("#like" + id + " .filesPost");
    num_like = document.querySelector("#like" + id + ".actionBtnPost p");
    botao = document.querySelector("#like" + id + ".actionBtnPost button");
    if (like.style.backgroundColor != "red") {
        console.log(like);
        num_like.innerHTML = parseInt(num_like.innerHTML) + 1;
        like.innerHTML = "Curtir";       
        like.style.backgroundColor = "red";      
       /*usar o jQuery para enviar (id, result) para likear.php 
        $(document).ready(function(){
            e.preventDefault();
            $.ajax({
                url: "../likear.php",
                type: "POST",
                data: {
                    id: id,
                    result: 'true'
                },
                dataType: "json"
            });
                

    });
    */
        
    }
    else {
        console.log(num_like);
        num_like.innerHTML = parseInt(num_like.innerHTML) - 1;
        like.style.backgroundColor = "white";
        like.innerHTML = "Curtir";
       /*usar o jQuery para enviar (id, result) para likear.php 
        $(document).ready(function(){
            e.preventDefault();
            $.ajax({
                url: "../likear.php",
                type: "POST",
                data: {
                    id: id,
                    result: 'false'
                },
                dataType: "json"
            });
                

    });
    */

}
    }
catch(e){
    console.log(e);
}
}
       
   

