<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Produk</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <!-- DataTables -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/produk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Satuan</th>
                                                <th>Harga</th>
                                                <th>Harga Beli</th>
                                                <th>Stok</th>
                                                <th>Stok Min</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($produk as $row): ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $row->kd_brg ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->nm_brg ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->satuan ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->harga ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->harga_beli ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->stok ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->stok_min ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo base_url('images/produk/'.$row->gambar) ?>" width="64" />
                                                </td>
                                                <td width="250">
                                                    <a href="<?php echo site_url('admin/produk/edit/'.$row->kd_brg) ?>"
                                                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete/'.$row->kd_brg) ?>')"
                                                    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <!--Content-->

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <?php $this->load->view("admin/_partials/footer.php") ?>
                </footer>
            </div>
        </div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
    </body>
</html>
