<?php
$user_id = $_SESSION['user_id'];
$profilstmt = $conn->prepare("SELECT nama, email FROM user WHERE user_id=$user_id");
$profilstmt->execute();

$result = $profilstmt->fetch();

if($uri_segment[4] == 'ubah-password') {
?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="<?php echo ASSET_URL; ?>action/updateProfile.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="oldPassword">Old Password</label>
                        <input type="password" class="form-control" id="oldPassword" aria-describedby="emailHelp"
                               placeholder="Old Password" name="oldPassword">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                               placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" aria-describedby="emailHelp"
                               placeholder="Confirm Password" name="confirmPassword">
                        <small id="password-message" class="form-text text-danger">Password doesn't match</small>
                        <small id="password-match-message" class="form-text text-success">Password match</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                        <a class="btn btn-outline-secondary" href="<?php echo BASE_URL.'/profile' ?>">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }else{ ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <img src="<?php echo getimagesize(ASSET_URL . 'images/eps/' . $result['photo']) && $result['photo'] != '' ? ASSET_URL . 'images/eps/' . $result['photo'] : 'http://via.placeholder.com/500x500'; ?>" alt="<?php echo $result['nama'].' photo' ?>" width="100%">
        </div>
        <div class="col-sm-8">
            <form action="<?php echo ASSET_URL; ?>action/updateProfile.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Your Full Name" value="<?php echo $result['nama'] ?>" name="fullname"
                           required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email" name="email" value="<?php echo $result['email'] ?>" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Photo Profile</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group">
                    <label for="ubahPassword">Password</label>
                    <a class="btn btn-outline-primary" href="<?php echo BASE_URL . '/profile/ubah-password' ?>">Ubah Password</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>