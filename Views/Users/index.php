<a href="/users/new" class="btn btn-sm btn-primary">Tambah</a>

<table class="table table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php foreach($users as $index => $users): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $users->name ?></td>
                <td><?= $users->username ?></td>
                <td><?= $users->password ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>