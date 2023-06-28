<?= $this->extend('layout'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <form action="/User/login" method="post">
        <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-danger mt-2">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php } ?>
        <div class="mb-3">
            <label for="emailLogin" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailLogin" name="emailLogin">
        </div>
        <div class="mb-3">
            <label for="passwordLogin" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordLogin" name="passwordLogin">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <a href="/Home/register">Don't have account ?</a>
</div>


<?= $this->endsection(); ?>