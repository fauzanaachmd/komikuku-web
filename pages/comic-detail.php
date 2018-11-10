<div class="container my-5">
    <div class="row mb-3">
        <div class="col-sm-4">
            <h3>Room Of Swords</h3>
        </div>
        <div class="col-4 text-sm-center">
            <h5>#Chapter 0</h5>
        </div>
        <div class="col-4 text-right">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Chapter</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <img src="http://via.placeholder.com/1140x600" alt="Gambar episode nya" width="100%">
        </div>
    </div>
    <div class="row py-4">
        <div class="col-12">
            <div class="slideshow-chapter" data-slick='{"slidesToShow": 8, "slidesToScroll": 6}'>
                <?php for($i=1;$i<=16;$i++) { ?>
                <div class="p-3">
                    <a class="d-inline-block text-center" href="#">
                        <img src="http://via.placeholder.com/100x100" alt="Slideshow Image" width="100%">
                        <p class="mt-3">Chapter <?php echo $i; ?></p>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>