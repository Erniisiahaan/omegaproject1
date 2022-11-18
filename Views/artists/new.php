<h3>Tambah Artist</h3>
 
<a href="/artists" class="btn btn-sm btn-primary mb-2">List Artist</a>

<form action="/artists" method="post">
    <div class="col-12 col-md-6">
        <label for="name" class ="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
        <?php if (isset($errors) and $errrors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('name'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form> 