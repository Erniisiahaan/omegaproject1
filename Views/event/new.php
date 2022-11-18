<h3>Tambah Event</h3>
 
<a href="/event/index" class="btn btn-sm btn-primary mb-2">List Event</a>

<form action="/event" method="post">
    <div class="col-12 col-md-6">
        <label for="name" class ="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
        <?php if (isset($errors) and $errors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('name'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 col-md-6">
        <label for="image_name" class ="form-label">Gambar</label>
        <input type="text" name="image_name" id="image_name" class="form-control" value="<?= set_value('image_name') ?>">
        <?php if (isset($errors) and $errors->getError('image_name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('image_name'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 col-md-6">
        <label for="artist_id" class ="form-label">Artist</label>
        <input type="int" name="artist_id" id="name" class="form-control" value="<?= set_value('artist_id') ?>">
        <?php if (isset($errors) and $errors->getError('artist_id')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('artist_id'); ?>
            </div>
        <?php } ?>
    </div>
    </div>
    <div class="col-12 col-md-6">
        <label for="event_date" class ="form-label">Tanggal</label>
        <input type="datetime" name="event_date" id="event_date" class="form-control" value="<?= set_value('event_date') ?>">
        <?php if (isset($errors) and $errors->getError('event_date')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('event_date'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 col-md-6">
        <label for="price" class ="form-label">Harga</label>
        <input type="int" name="price" id="name" class="form-control" value="<?= set_value('price') ?>">
        <?php if (isset($errors) and $errors->getError('price')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('price'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form> 

<script>
  $('event_date').datetimepicker();
</script>