<a href="/event/new" class="btn btn-sm btn-primary">Tambah</a>

<table class="table table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Artis</th>
        <th>Limit Tiket</th>
        <th>Status</th>
        <th>Waktu</th>
        <th>User</th>
        <th>Harga</th>
    </thead>
    <tbody>
        <?php foreach($event as $index => $event): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $event->name ?></td>
                <td><?= $event->image_name ?></td>
                <td><?= $event->artist_id ?></td>
                <td><?= $event->ticket_limit ?></td>
                <td><?= $event->status_id ?></td>
                <td><?= $event->event_date ?></td>
                <td><?= $event->user_id ?></td>
                <td><?= $event->price ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>