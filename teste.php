<?php


include('conexao.php');
if (isset($_GET['id'])){

    $id = $_GET['id'];
    
$sql = "SELECT  imagem  from post # tem que pegar o id do usuario conectado e acrescentar o 'where id = $id'";
#mostrar a imagem pelo caminho salvo no banco


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<img src ="."petbook/".$row["imagem"].">";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

}


?>