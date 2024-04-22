<div class="container-fluid">
    <div class="row">
        <?php
        require "admin/tamplate/menu.php";
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Anggota</h1>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa bi-plus" aria-hidden="true"></i>
                        Tambah Anggota
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
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        $query = "SELECT * FROM anggota a, jabatan j, user u WHERE a.jabatan_id = j.id AND a.user_id = u.id ORDER BY a.id DESC";
                        $res = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>

                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $row['nama'] ?></th>
                                <td><?= $row['jabatan'] ?></th>
                                <td><?= $row['username'] ?></th>
                                <td>
                                    <a href="index.php?page=anggota/edit&id=<?php echo $row['user_id'] ?>" class="btn btn-warning btn-xs">
                                        <i class="bi bi-pencil-square" aria-hidden="true"></i> Edit
                                    </a>
                                    <a href="fungsi/hapus.php?anggota=hapus&id=<?php echo $row['user_id'] ?>" onclick="javascript:return confirm('Hapus Data Anggota?');" class="btn btn-danger btn-xs">
                                        <i class="bi bi-trash" aria-hidden="true"></i> Hapus
                                    </a>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Anggota</h1>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="fungsi/tambah.php?anggota=tambah" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama" class="col-form-label">Nama Anggota:</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>

                                <div class="mb-3">
                                    <label for="jabatan" class="col-form-label">Jabatan:</label>
                                    <select name="jabatan" id="jabatan" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Jabatan</option>

                                        <?php
                                        $query2 = "SELECT * FROM jabatan ORDER BY jabatan DESC";
                                        $res2 = mysqli_query($koneksi, $query2);

                                        while ($row2 = mysqli_fetch_assoc($res2)) {
                                        ?>

                                            <option value="<?= $row2['id'] ?>"><?= $row2['jabatan'] ?></option>

                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>

                                    <br>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="jenis_kelamin" value="L">
                                        <label for="inlineRadio1" class="form-check-label">Laki-Laki</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="jenis_kelamin" value="P">
                                        <label for="inlineRadio1" class="form-check-label">Perempuan</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Alamat:</label>
                                    <textarea name="alamat" id="message-text" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="no-telp" class="col-form-label">No Telepon:</label>
                                    <input type="tel" name="no_telp" id="no-telp" class="form-control">
                                </div>

                                <hr class="border border-primary border-3 opacity-75">

                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="level" class="col-form-label">Level:</label>
                                    <select name="level" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Level</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
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