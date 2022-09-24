<?php

    if(isset($_POST['tambahSeries'])){

        include('../db.php');

        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
                "INSERT INTO series(genre, name, realese,  episode, season, synopsis)
                    VALUES
            ('$genre', '$name', '$realese', '$episode', '$season', '$synopsis')")
                or die(mysqli_error($con)); 

            if($query){
                echo
                    '<script>
                    alert("Tambah Series Success");
                    window.location = "../page/seriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Tambah Series Failed");
                    </script>';
            }
    }else{
      echo
       '<script>
        window.history.back()
        </script>';
     }
?>