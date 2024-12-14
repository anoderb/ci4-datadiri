<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <form action="#" method="post" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="login" placeholder="Email or Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="remember" class="form-check-input"> Remember Me
                                        </label>
                                    </div>
                                    <a href="/" type="submit" class="btn btn-primary btn-block mt-3">Login</a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
