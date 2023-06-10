<div class="d-flex align-items-center justify-content-center vh-100" >
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="content">
                            <h1 class="h3 mb-3 fw-normal">Hai, Yuk Registrasi Dulu!</h1>
                            <?php if($this->session->flashdata('error') != ''): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $this->session->flashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('Regis/registerUser') ?>" method="post">
                                <!-- Name input -->
                                <div class="form-floating">
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Name" required>
                                    <label for="nama">Name</label>
                                </div>
                                <br>
                                <!-- Username input -->
                                <div class="form-floating">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                                    <label for="username">Username</label>
                                </div>
                                </br>
                                <!-- Password input -->
                                <div class="form-floating">
                                    <input type="password" id="pass" class="form-control" name="password" placeholder="Password" required>
                                    <label for="pass">Password</label>
                                </div>
                                <br>
                                <!-- Repeat Password input -->
                                <div class="form-floating">
                                    <input type="password" id="registerRepeatPassword" class="form-control" name="registerRepeatPassword" placeholder="Repeat Password" required>
                                    <label for="registerRepeatPassword">Repeat password</label>
                                </div>
                                </br>
                                <!-- Submit button -->
                                <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
