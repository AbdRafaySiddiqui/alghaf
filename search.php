<?php 
include "conn.php";
if(isset($_POST['btn_search']))
{
    $destination = $_POST['destination_inp'];
    // header("Location : search_result.php"   );
    header("Location: search_result.php?des=$destination");
    
}
?>