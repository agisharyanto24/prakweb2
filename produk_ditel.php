<?php
//tangkap request id dari file produk ketika di klik button detail

$iddetail = $_REQUEST['iddetail'];
// var_dump($iddetail);
//         die;

//buat objek dari kelas produk 
$model = new Produk();

//panggil fungsi ambil data untuk menampilkan data produk berdasarkan id
$produk = $model->ambilProduk($iddetail);
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
                <li> ID Produk : <?php echo $produk ['kode'] ?> </li>
                <li>Nama Barang : <?php echo $produk['nama']?></li>
                <li>Harga Beli : <?php echo $produk['harga_beli']?></li>
                <li>Harga Jual : <?php echo $produk['harga_jual']?></li>
                <li>Stok Barang : <?php echo $produk['stok']?></li>
                <li>Minimal Stok : <?php echo $produk['min_stok']?></li>
                <li>Jenis Produk : <?php echo $produk['jenis_produk_id']?></li>

            </ul>
        </div>
    </section>
    <!-- /.content -->
</div>