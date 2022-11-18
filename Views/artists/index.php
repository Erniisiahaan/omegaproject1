<a href="/artists/new" class="btn btn-sm btn-primary">Tambah</a>

<table class="table table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php foreach($artists as $index => $artist): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $artist->name ?></td>
                <td><?= $artist->status_id ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>