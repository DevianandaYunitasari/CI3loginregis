<div class="d-flex align-items-center justify-content-center vh-100">
<img src="https://assets.website-files.com/63902f1c487649a4346ac133/63902f1c487649d6266ac178_shape-01.svg" loading="lazy" alt="" class="img-shape" style="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h3 mb-3 fw-normal">Hai, Silahkan Login</h1>
                        <form class="form-signin" action="<?= base_url('home/checkLogin') ?>" method="post">
                            
                        <div class="form-floating">
                                <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Pass">
                                <label for="pass">Password</label>
                            </div>
                            <div class="form-check text-start my-3">
                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>