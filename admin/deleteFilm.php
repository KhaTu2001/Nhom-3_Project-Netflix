<?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    

    $sql = "DELETE FROM film  WHERE id = $filmID";
    $sql1 = "DELETE FROM episode  WHERE film_id = $filmID";
    $sql2 = "DELETE FROM like_action  WHERE film_id = $filmID";
    $sql3 = "DELETE FROM dislike WHERE film_id = $filmID";
    $sql4 = "DELETE FROM my_list WHERE film_id = $filmID";
     if (mysqli_query($conn, $sql4) && mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3) && mysqli_query($conn, $sql) ) {?>
<script>
alert("Delete movie successfully");
location.href = "manageFilm.php";
</script>

<?php        
     } else {
         echo "Error deleting movies: " . mysqli_error($conn);
     }
     mysqli_close($conn);
    ?>