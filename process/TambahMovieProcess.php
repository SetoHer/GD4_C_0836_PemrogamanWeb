<?php

    if(isset($_POST['tambahMovie'])){

        include('../db.php');

        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
                "INSERT INTO movies(genre, realese, name, season, synopsis)
                    VALUES
            ('$genre', '$realese', '$name', '$season', '$synopsis')")
                or die(mysqli_error($con)); 

            if($query){
                echo
                    '<script>
                    alert("Add Movie Success");
                    window.location = "../page/listMoviesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Add Movie Failed");
                    </script>';
            }
    }else{
      echo
       '<script>
        window.history.back()
        </script>';
     }
?>