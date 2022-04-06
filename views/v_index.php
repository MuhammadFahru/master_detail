<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container pt-5" id="myGroup">
        <div class="card shadow mt-5">
            <div class="card-header p-4">
                <div class="d-flex justify-content-between">
                    <h3 class="mb-0 mt-1">Daftar Riwayat Hidup</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</button>                    
                    <!-- Modal -->
                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="process_master.php" method="POST">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telp" class="form-label">Telp</label>
                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Telp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pendidikan" class="form-label">Pendidikan</label>
                                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan">
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-5">
                <div class="d-flex justify-content-end mb-5">
                    <form method="GET" action="index.php">
                        <div class="d-flex justify-content-start">
                            <input type="text" name="searchData" id="search" value="<?= @$search ?>" autocomplete="off" class="form-control">
                            <button type="submit" class="btn btn-primary me-3">Cari</button>
                            <a href="index.php" class="btn btn-secondary">Refresh</a>
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telphone</th>
                            <th>Email</th>
                            <th>Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($data = @$list1->fetch_array()) {
                        ?>
                            <tr>
                                <td align="center"><?= $i ?></td>
                                <td align="center"><?= $data['nama'] ?></td>
                                <td align="center"><?= $data['alamat'] ?></td>
                                <td align="center"><?= $data['telp'] ?></td>
                                <td align="center"><?= $data['email'] ?></td>
                                <td align="center"><?= $data['pendidikan'] ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#updateData<?= $i ?>">Update</button>                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="updateData<?= $i ?>" tabindex="-1" aria-labelledby="updateData<?= $i ?>Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="updateData<?= $i ?>Label">Update Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="process_master.php?id=<?= $data['id_drh_master'] ?>" method="POST">
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?= $data['nama'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat</label>
                                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $data['alamat'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="telp" class="form-label">Telp</label>
                                                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Telp" value="<?= $data['telp'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= $data['email'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                                                <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan" value="<?= $data['pendidikan'] ?>">
                                                            </div>
                                                            <div class="d-flex justify-content-end mb-4">
                                                                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="delete.php?id_master=<?= $data['id_drh_master'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger me-2 ms-2">Delete</a>
                                        <a class="btn btn-sm btn-info text-white" data-bs-toggle="collapse" href="#collapseExample<?= $i ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?= $i++ ?>" data-bs-parent="#myGroup">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
            $j = 1;
            while ($data = @$list2->fetch_array()) {
            $sqldetail = 'SELECT * FROM t_drh_detail WHERE id_drh_master = ' . $data['id_drh_master'];
            $list3 = $mysqli->query($sqldetail);
        ?>
            <div class="collapse mt-5 mb-5" id="collapseExample<?= $j++ ?>" data-bs-parent="#myGroup">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0 mt-1">Daftar Pengalaman <?= $data['nama'] ?></h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataPengalaman<?= $data['id_drh_master'] ?>">Tambah Data</button>                    
                            <!-- Modal -->
                            <div class="modal fade" id="tambahDataPengalaman<?= $data['id_drh_master'] ?>" tabindex="-1" aria-labelledby="tambahDataPengalaman<?= $data['id_drh_master'] ?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataPengalaman<?= $data['id_drh_master'] ?>Label">Form Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="process_detail.php" method="POST">
                                                <input type="hidden" name="id_master" value="<?= $data['id_drh_master'] ?>" class="d-none">
                                                <div class="mb-3">
                                                    <label for="tahun" class="form-label">Tahun</label>
                                                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                                    <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Masukan Perusahaan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bidang" class="form-label">Bidang</label>
                                                    <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Masukan Bidang">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan">
                                                </div>
                                                <div class="d-flex justify-content-end mb-4">
                                                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <table class="table table-striped">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Perusahaan</th>
                                    <th>Bidang</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $k = 1;
                                    while ($data2 = @$list3->fetch_array()) {
                                ?>
                                    <tr>
                                        <td align="center"><?= $k++ ?></td>
                                        <td align="center"><?= $data2['tahun'] ?></td>
                                        <td align="center"><?= $data2['perusahaan'] ?></td>
                                        <td align="center"><?= $data2['bidang'] ?></td>
                                        <td align="center"><?= $data2['keterangan'] ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#updateDataPengalaman<?= $data2['id_drh_detail'] ?>">Update</button>                    
                                                <!-- Modal -->
                                                <div class="modal fade" id="updateDataPengalaman<?= $data2['id_drh_detail'] ?>" tabindex="-1" aria-labelledby="updateDataPengalaman<?= $data2['id_drh_detail'] ?>Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateDataPengalaman<?= $data2['id_drh_detail'] ?>Label">Form Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="process_detail.php?id=<?= $data2['id_drh_detail'] ?>" method="POST">
                                                                    <input type="hidden" name="id_master" value="<?= $data2['id_drh_master'] ?>" class="d-none">
                                                                    <div class="mb-3">
                                                                        <label for="tahun" class="form-label">Tahun</label>
                                                                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun" value="<?= $data2['tahun'] ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="perusahaan" class="form-label">Perusahaan</label>
                                                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Masukan Perusahaan" value="<?= $data2['perusahaan'] ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="bidang" class="form-label">Bidang</label>
                                                                        <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Masukan Bidang" value="<?= $data2['bidang'] ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan" value="<?= $data2['keterangan'] ?>">
                                                                    </div>
                                                                    <div class="d-flex justify-content-end mb-4">
                                                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="delete.php?id_detail=<?= $data2['id_drh_detail'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger me-2 ms-2">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>    

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        var $myGroup = $('#myGroup');
        $myGroup.on('show.bs.collapse','.collapse', function() {
            $myGroup.find('.collapse.in').collapse('hide');
        });
    </script>

</body>
</html>