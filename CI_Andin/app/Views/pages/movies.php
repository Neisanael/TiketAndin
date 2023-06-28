<?= $this->extend('layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-primary">
            <tr>
                <th scope="col">Judul</th>
                <td><?= $movies['judul'] ?></td>
            </tr>
            <tr>
                <th scope="col">Deskripsi</th>
                <td><?= $movies['deskripsi'] ?></td>
            </tr>
            <tr>
                <th scope="col">Durasi</th>
                <td><?= $movies['durasi'] ?> Min</td>
            </tr>
        </table>
    </div>
    <?php if (session()->has('logged_in') && session()->get('logged_in') === true) : ?>
        <a href="/Ticket/<?= $movies['id'] ?>" class="btn btn-primary">Select Session</a>
    <?php else : ?>
        <a href="/Home/login" class="btn btn-primary">Select Session</a>
    <?php endif; ?>
    
</div>

<?= $this->endsection(); ?>