<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <form action="<?php echo ASSET_URL; ?>action/signInProcess.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="edamailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class	="mt-3 text-center">
                    <p>
                        Didn't have any account?
                    </p>
                    <a class="btn btn-warning" href="<?php echo BASE_URL; ?>/sign-up">Sign Up Here</a>
                </div>
            </form>
        </div>
    </div>
</div>