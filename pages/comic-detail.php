<?php
$serial_id = $uri_segment[4];
$stmt = $conn->prepare("SELECT nama, genre, sinopsis FROM serial WHERE serial_id=$serial_id");
$stmt->execute();

$serial_res = $stmt->fetch();
?>
<div class="container my-5">
    <div class="row mb-3">
        <div class="col-sm-4">
            <h3><?php echo $serial_res['nama'] ?></h3>
        </div>
        <?php
        $episode_id = $uri_segment[6];

        $stmt = $conn->prepare("SELECT name, image, read_count FROM episode WHERE epsiode_id=$episode_id");
        $stmt->execute();

        $result = $stmt->fetch();
        ?>
        <div class="col-4 text-sm-center">
            <h5>#Chapter <?php echo $result['name']; ?></h5>
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
            <img src="<?php echo getimagesize(ASSET_URL . 'images/eps/' . $result['image']) && $result['image'] != '' ? ASSET_URL . 'images/eps/' . $result['image'] : 'http://via.placeholder.com/100x100'; ?>" alt="<?php echo $result['name']; ?>" width="100%">
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
<?php
// Update read count
$read_count = $result['read_count'] + 1;
$sql = "UPDATE episode SET read_count=$read_count WHERE epsiode_id=$episode_id";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();
?>