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
                        <h1 class="mt-4">Data Penjualan</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <!-- DataTables Mjual -->
                        <h3>Penjualan</h3>
                        <div class="card mb-3">
                            <div class="card-body">
                                <button class="button" href="<?php echo base_url("admin/penjualan/export"); ?>">Export</button>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No Nota</th>
                                                <th>Kode Konsumen</th>
                                                <th>Tanggal Jual</th>
                                                <th>Total beli</th>
                                                <th>Pembayaran</th>
                                                <th>Kembalian</th>
                                                <th>Status</th>
                                                <th>Bukti Tf</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jual as $row): ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $row->no_nota ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->kd_kons ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->tgl_jual ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->total_biaya ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->pembayaran ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->kembalian ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->status ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->bukti_tf ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- DataTables Detail jual -->
                        <h3>Detail Penjualan</h3>
                        <div class="card mb-3">
                            <div class="card-body">
                                <button>Export</button>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>No Nota</th>
                                                <th>Kode Barang</th>
                                                <th>Harga Barang</th>
                                                <th>Harga beli</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($detail as $row): ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $row->id ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->no_nota ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->kd_brg ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->hrg_brg ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->hrg_beli ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->jml_brg ?>
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
