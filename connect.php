<?php
$conn = mysqli_connect("localhost", "root", "", "blog");
if($conn->errno){
    echo "nie udało się połączyć z bazą danych";
    exit;
} else{
    echo "Podłaczenie się udało";
}
?>