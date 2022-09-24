<?php
    if(isset($_POST['editSeries'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];
        
        $sql = "UPDATE series SET genre='$genre', name='$name', realese='$realese', season='$season', episode='$episode', synopsis='$synopsis' WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Edit Series Success"); window.location = "../page/SeriesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Edit Series Failed");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>