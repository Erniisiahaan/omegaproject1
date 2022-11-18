<h3>Tambah Customer</h3>
 
<a href="/customer" class="btn btn-sm btn-primary mb-2">List Artist</a>

<form action="/customer" method="post">
    <div class="col-12 col-md-6">
        <label for="name" class ="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
        <?php if (isset($errors) and $errrors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('name'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 col-md-6">
        <label for="name" class ="form-label">Phone Nummber</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?= set_value('phone_number') ?>">
        <?php if (isset($errors) and $errrors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('phone_number'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 col-md-6">
        <label for="name" class ="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="<?= set_value('email') ?>">
        <?php if (isset($errors) and $errrors->getError('email')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('email'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form> 