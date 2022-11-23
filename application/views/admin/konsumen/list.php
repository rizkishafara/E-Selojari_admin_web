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
                        <h1 class="mt-4">Data Konsumen</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <!-- DataTables -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/konsumen/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama Konsumen</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Kode Pos</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($konsumen as $row): ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $row->kd_kons ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->nm_kons ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->alm_kons ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->kota_kons ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->kd_pos ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->phone ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->email ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->username ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->password ?>
                                                </td>
                                                <td width="250">
                                                    <a href="<?php echo site_url('admin/konsumen/edit/'.$row->kd_kons) ?>"
                                                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/konsumen/delete/'.$row->kd_kons) ?>')"
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
