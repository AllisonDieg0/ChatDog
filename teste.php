<?php
session_start();

include('conexao.php');
if (isset($_SESSION['id'])){
$id = $_SESSION['id'];
echo $id;
}
else{
    echo "Não está logado";
}
    
$sql = "SELECT  imagem  from post where fk_cliente = $id";



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

?>