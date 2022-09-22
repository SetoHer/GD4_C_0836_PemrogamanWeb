<?php
    include '../component/sidebar.php';
    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM movies WHERE id = $id");
    $data = mysqli_fetch_array($sql);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >Edit Movie</h4>
        <hr>
        <form action="../process/editMovieProcess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input class="form-control" id="genre" name="genre">
            </div>
            <div class="mb-3">
                <label for="realese" class="form-label">Realese</label>
                <input class="form-control" id="realese" name="realese">
            </div>
            <div class="mb-3">
                <label for="season" class="form-label">Season</label>
                <input class="form-control" id="season" name="season">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editMovie">Edit Movie</button>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'];?>">

        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>