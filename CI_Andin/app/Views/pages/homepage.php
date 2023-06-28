<?= $this->extend('layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <label for="search" class="form-label">Datalist example</label>
    <input class="form-control" id="search" placeholder="Type to search...">

    <div class="d-flex flex-wrap justify-content-between" id="card-container">
        <?php foreach ($movies as $item) : ?>
           <a href="Movie/<?= urlencode($item['id']) ?>">
                <div class="card text-bg-secondary my-3" style="width: 16rem; height: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['judul'] ?></h5>
                        <p class="card-text">Genre</p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var searchTerm = $(this).val().toLowerCase();
            $('#card-container .card').each(function() {
                var title = $(this).find('.card-title').text().toLowerCase();
                if (title.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>


<?= $this->endsection(); ?>