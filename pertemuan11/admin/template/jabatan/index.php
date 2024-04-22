<div class="container-fluid">
    <div class="row">
        <?php
        require "admin/tamplate/menu.php";
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Jabatan</h1>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="bi bi-plus" aria-hidden="true"></i>
                        Tambah Jabatan
                    </button>
                </div>
            </div>

            <?php
            if (isset($_SESSION['_flashdata'])) {
                echo "<br>";

                foreach ($_SESSION['_flashdata'] as $key => $value) {
                    echo get_flashdata($key);
                }
            }
            ?>

            <div class="table-responsive small">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = "SELECT * FROM jabatan ORDER BY id DESC";
                        $res = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <th><?= $row['jabatan'] ?></th>
                                <th><?= $row['keterangan'] ?></th>
                                <td>
                                    <a href="index.php?page=jabatan/edit&id=<?php echo $row['id'] ?>" class="btn btn-warning btn-xs"><i class="bi bi-pencil-square" aria-hidden="true"></i> Edit</a>
                                    <a href="fungsi/hapus.php?jabatan=hapus&id=<?php echo $row['id'] ?>" onclick="javascript:return confirm('Hapus Data Jabatan?');" class="btn btn-danger btn-xs"><i class="bi bi-trash" aria-hidden="true"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="exampleModal" tableindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Jabatan</h1>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="fungsi/tambah.php?jabatan=tambah" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Jabatan:</label>
                                    <input type="text" name="jabatan" class="form-control" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Keterangan:</label>
                                    <textarea name="keterangan" id="message-text" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x" aria-hidden="true"></i> Close</button>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy" aria-hidden="true"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>