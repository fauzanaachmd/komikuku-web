<?php
    $serial_id = $uri_segment[4];
?>
<form action="<?php echo ASSET_URL . 'action/tambahEpisodeProcess.php' ?>" method="post" enctype="multipart/form-data">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="form-group">
                    <input type="hidden" name="serialId" value="<?php echo $serial_id; ?>">
<!--                    <label for="thumbnail"> Thumbnail  Epsiode </label><br>-->
<!--                    <div class="input-group mb-3">-->
<!--                        <div class="input-group-prepend">-->
<!--                            <span class="input-group-text">Upload</span>-->
<!--                        </div>-->
<!--                        <div class="custom-file">-->
<!--                            <input type="file" class="custom-file-input" id="inputGroupFile01">-->
<!--                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label> Judul Episode</label><br>
                    <input type="text" name="name" col="50" required>
                </div>
                <div class="form-group">
                    <label>Unggah Episode File</label>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input name="file" type="file" class="custom-file-input" id="inputGroupFile01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>

                </div>

                <br>
                <button type="submit" class="btn btn-primary">Publish</button>
                <a class="btn btn-outline-secondary" href="<?php echo BASE_URL . '/comic/' . $serial_id; ?>">Batal</a>
            </div>
        </div>
    </div>
</form>