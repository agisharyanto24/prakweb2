<?php
//tangkap request id dari klik tombol mata atau button detail
$id = $_REQUEST['iddetail'];

//buat objek produk dari kelas produk
$obj_produk = new Produk();

//tampilkan data produk berdasarkan function ambilproduk dari class produk berdasrkan id nya
$produk = $obj_produk->ambilProduk($id);

?>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Detail Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container">
            <ul>
                <li>Nama Produk : <?php echo $produk ['nama']?></li>

            </ul>
        </div>
    </section>
    <!-- /.content -->
</div>