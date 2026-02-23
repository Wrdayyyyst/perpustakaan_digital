<?php
include_once "koneksi.php";
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <a href="?page+kategori_tambah" class="btn btn-primary">Tambah Kategori</a>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php
                                        $i= 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($data=mysqli_fetch_array($query)) :
                                        ?>
                                        <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $data['kategori']; ?></td>
                                        <td>
                                            <!-- Tombol aksi -->
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>