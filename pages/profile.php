<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <img src="http://via.placeholder.com/500x500" alt="Slideshow Image" width="100%">
        </div>
        <div class="col-sm-8">
            <form action="<?php echo ASSET_URL; ?>action/updateProfile.php" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Your Full Name" name="fullname"
                           required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                           placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" aria-describedby="emailHelp"
                           placeholder="Confirm Password" name="confirmPassword" required>
                    <small id="password-message" class="form-text text-danger">Password doesn't match</small>
                    <small id="password-match-message" class="form-text text-success">Password match</small>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>