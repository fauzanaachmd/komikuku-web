<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="<?php echo ASSET_URL; ?>action/createSinopsisProcess.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Genre</label>
                    <select class="form-control" required name="genre">
                        <option value="-">Pilih</option>
                        <option value="romantis">Romantis</option>
                        <option value="horror">Horror</option>
                        <option value="comedy">Comedy</option>
                        <option value="action">Action</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="judulSerial">Judul Serial</label>
                    <input class="form-control" id="judulSerial" name="nama" rows="4" cols="80" required>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" name="sinopsis" id="sinopsis" required></textarea>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Thumbnail</label>
                    <input class="form-control" type="file" name="thumbnail">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Buat Serial</button>
                <a class="btn btn-outline-secondary" href="<?php echo BASE_URL; ?>/publish">Batal</a>
            </form>
        </div>
    </div>
</div>