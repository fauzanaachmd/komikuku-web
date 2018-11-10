<?php
    if($uri_segment[5] == 'chapter') {
        include_once 'comic-detail.php';
    }else{
?>
<section class="comic-banner text-center py-5">
    <h5>One Broken Sword Will Save All</h5>
    <h3>Room Of Swords</h3>
</section>
<div class="comic-episode-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Episode</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr onclick="window.location='<?php echo BASE_URL; ?>/comic/1/chapter/1'">
                        <th scope="row">1</th>
                        <td>
                            <img src="http://via.placeholder.com/100x100" alt="Slideshow Image">
                        </td>
                        <td><a>Episode 1</a></td>
                        <td>11 Januari 2018</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <h3><img class="mr-4" src="<?php echo ASSET_URL; ?>images/refresh.svg" alt="Updated at" height="40px">Update
                    tiap hari Selasa</h3>
                <img class="my-3" src="<?php echo ASSET_URL; ?>images/400x400.png" alt="Comic Cover Image" width="100%">
                <h4>Sinopsis</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aspernatur consectetur cumque
                    deleniti dolor dolorum, earum et eum itaque laborum maiores nam neque non nulla officiis rem sit
                    tenetur.
                </p>
            </div>
        </div>
    </div>
</div>
<?php } ?>