<a href="/customer/new" class="btn btn-sm btn-primary">Tambah</a>

<table class="table table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Nomor Handphone</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach($customer as $index => $customer): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $customer->name ?></td>
                <td><?= $customer->status_id ?></td>
                <td><?= $customer->phone_number ?></td>
                <td><?= $customer->email ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>