<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <h1>APLIKASI TO-DO LIST</h1>
    <form action="/todolist/simpan" method="post">
        <?= csrf_field() ?>
        <label for="kegiatan">Masukkan Kegiatan : </label>
        <input type="text" name="kegiatan" id="kegiatan" required>
        <input type="submit" value="Tambahkan">
        <a href="/logout">Logout</a>
    </form>

    <h2>Daftar Kegiatan</h2>
    <ol>
        <?php if (!empty($daftarKegiatan) && is_array($daftarKegiatan)) : ?>
            <?php foreach ($daftarKegiatan as $keg) : ?>
                <li class="<?= $keg['status'] === 'Selesai' ? 'completed' : '' ?>">
                    <span><?= $keg['kegiatan'] ?></span>
                    <span>
                        <?php if ($keg['status'] === 'Aktif') : ?>
                            <a href="/todolist/selesai/<?= $keg['idKegiatan'] ?>">Selesai</a>
                        <?php endif; ?>
                        <a href="/todolist/hapus/<?= $keg['idKegiatan'] ?>">Hapus</a>
                    </span>
                </li>
            <?php endforeach ?>
        <?php else : ?>
            <li>Kosong</li>
        <?php endif ?>
    </ol>
</body>

</html>
