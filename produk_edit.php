<?php
// buat terlebih dahulu objek dari class produk dan class jenis produk

$obj_produk = new Produk();
$obj_jenis_produk = new Jenis_produk();

// panggil function yang berfungsi untuk menampilkan data produk dan jenis produk
$data_produk = $obj_produk->tampilProduk();
$data_jenis_produk = $obj_jenis_produk ->dataJenis_produk();

//  proses edit data
//tangkap request id yang ingin di edit menggunakan request idedit yang ada di url
// (setelah user mengklik tombol edit atau icon pencil )
$idedit = $_REQUEST['idedit'];

//logika untuk proses data id
//ternary operator

// 1. cek terlebih dahulu id yang ingin di edit menggunakan ternary operator 
// 2. jika ada id yang ingin di edit maka akses fungsi tampil produk untuk mengambil data yang sesuai 
//dengan id yang ingin di edit, dan simpan datanya ke dalam sebuah variable
// 3. kita cek jika tidak ada id yang ingin di edit, maka kembalikan data dalam bentuk array kosong 
$produk = !empty($idedit) ? $obj_produk->ambilProduk($idedit) : [];
// artinya jika $idedit ini kosong maka fungsi ambil produk tidak di jalankan 
// tetapi jika idedit ini tidak kosong atau ada data produk yang ingin di edit 
//maka fungsi ambil produk akan di jalankan dengan parameter id produk ($idedit) yang ingin di edit
// dan akan mengembalikan data produk yang sesuai
?>
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container">
            <form method="POST" action="produk_controller.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" value="<?php echo $produk ['nama'] ?>"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                    <div class="col-8">
                        <input id="harga_jual" name="harga_jual" type="text"
                            value="<?php echo $produk ['harga_jual'] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label">Stok</label>
                    <div class="col-8">
                        <input id="stok" name="stok" type="text" value="<?php echo $produk ['stok'] ?>"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label>
                    <div class="col-8">
                        <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                            <option selected> Pilih Jenis Produk </option>
                            <?php
        foreach ($data_jenis_produk as $jenis){
            
            ?>
                            <option value="<?php echo $jenis['id']?>"><?php echo $jenis['nama_jenis']?></option>
                            <?php
        }
        ?>
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="ubah" class="btn btn-primary" value="ubah">Ubah</button>
                        <input type="hidden" name="idx" value="<?= $idedit ?>">
                    </div>
                </div>
            </form>
        </div>

    </section>
</div>
<!-- ini untuk tutup konten -->