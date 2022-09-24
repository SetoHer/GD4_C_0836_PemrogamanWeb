<?php
    include '../component/sidebar.php';
    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM series WHERE id = $id");
    $data = mysqli_fetch_array($sql);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >Edit series</h4>
        <hr>
        <form action="../process/editSeriesProcess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" id="name" name="name" value="<?php echo $data['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <br>
                <select class="from-contol selectpicker col-md-12" id="genre" name="genre" value="<?php echo $data['genre']?>" multiple >
                    <option value="action">Action</option>
                    <option value="comedy">Comedy</option>
                    <option value="horor">Horor</option>
                    <option value="romantis">Romantis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="realese" class="form-label">Realese</label>
                <input class="form-control" id="realese" name="realese" value="<?php echo $data['realese'] ?>">
            </div>
            <div class="mb-3">
                <label for="episode" class="form-label">Episode</label>
                <input class="form-control" id="episode" name="episode" value="<?php echo $data['episode'] ?>">
            </div>
            <div class="mb-3">
                <label for="season" class="form-label">Season</label>
                <input class="form-control" id="season" name="season" value="<?php echo $data['season'] ?>">
            </div>
            <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="3"><?php echo $data['synopsis'] ?></textarea>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editSeries">Edit Series</button>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'];?>">

        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</body>
</html>