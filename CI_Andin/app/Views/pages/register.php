<?= $this->extend('layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="emailRegister" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailRegister" name="emailRegister">
        </div>
        <div class="mb-3">
            <label for="passwordRegister" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordRegister" name="passwordRegister">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?= $this->endsection(); ?>