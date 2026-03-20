<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informasi Buku</h1>

        <?php
        // ===== Data Buku =====

        // Buku 1
        $judul1 = "Pemrograman Web dengan PHP";
        $pengarang1 = "Budi Raharjo";
        $penerbit1 = "Informatika";
        $tahun_terbit1 = 2023;
        $harga1 = 85000;
        $stok1 = 15;
        $isbn1 = "978-602-1234-56-7";
        $kategori1 = "Programming";
        $bahasa1 = "Indonesia";
        $halaman1 = 350;
        $berat1 = 500;

        // Buku 2
        $judul2 = "Pemrograman PHP Modern";
        $pengarang2 = "Andi Setiawan";
        $penerbit2 = "Elex Media";
        $tahun_terbit2 = 2022;
        $isbn2 = "978-602-9876-22-3";
        $harga2 = 95000;
        $stok2 = 10;
        $kategori2 = "Programming";
        $bahasa2 = "Indonesia";
        $halaman2 = 450;
        $berat2 = 550;

        // Buku 3
        $judul3 = "MySQL Database Administration";
        $pengarang3 = "John Smith";
        $penerbit3 = "O'Reilly";
        $tahun_terbit3 = 2021;
        $isbn3 = "978-149-2080-51-0";
        $harga3 = 120000;
        $stok3 = 8;
        $kategori3 = "Database";
        $bahasa3 = "Inggris";
        $halaman3 = 520;
        $berat3 = 600;

        // Buku 4
        $judul4 = "Modern Web Design";
        $pengarang4 = "Sarah Johnson";
        $penerbit4 = "Packt";
        $tahun_terbit4 = 2023;
        $isbn4 = "978-180-0203-69-5";
        $harga4 = 110000;
        $stok4 = 12;
        $kategori4 = "Web Design";
        $bahasa4 = "Inggris";
        $halaman4 = 400;
        $berat4 = 480;
        ?>

        <div class="row">
            <!-- BUKU 1 --> 
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><?php echo $judul1; ?></h5>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-success mb-2"><?php echo $kategori1; ?></span>
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengarang</th>
                                <td>: <?php echo $pengarang1; ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>: <?php echo $penerbit1; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>: <?php echo $tahun_terbit1; ?></td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>: <?php echo $isbn1; ?></td>
                            </tr>
                            <tr>
                                <th>Bahasa</th>
                                <td>: <?php echo $bahasa1; ?></td>
                            </tr>
                            <tr>
                                <th>Halaman</th>
                                <td>: <?php echo $halaman1; ?> halaman</td>
                            </tr>
                            <tr>
                                <th>Berat</th>
                                <td>: <?php echo $berat1; ?> gram</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>: Rp <?php echo number_format($harga1, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>: <?php echo $stok1 ?> buku</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUKU 2 --> 
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><?php echo $judul2; ?></h5>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-success mb-2"><?php echo $kategori2; ?></span>
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengarang</th>
                                <td>: <?php echo $pengarang2; ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>: <?php echo $penerbit2; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>: <?php echo $tahun_terbit2; ?></td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>: <?php echo $isbn2; ?></td>
                            </tr>
                            <tr>
                                <th>Bahasa</th>
                                <td>: <?php echo $bahasa2; ?></td>
                            </tr>
                            <tr>
                                <th>Halaman</th>
                                <td>: <?php echo $halaman2; ?> halaman</td>
                            </tr>
                            <tr>
                                <th>Berat</th>
                                <td>: <?php echo $berat2; ?> gram</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>: Rp <?php echo number_format($harga2, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>: <?php echo $stok2 ?> buku</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUKU 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><?php echo $judul3; ?></h5>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-warning mb-2"><?php echo $kategori3; ?></span>
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengarang</th>
                                <td>: <?php echo $pengarang3; ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>: <?php echo $penerbit3; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>: <?php echo $tahun_terbit3; ?></td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>: <?php echo $isbn3; ?></td>
                            </tr>
                            <tr>
                                <th>Bahasa</th>
                                <td>: <?php echo $bahasa3; ?></td>
                            </tr>
                            <tr>
                                <th>Halaman</th>
                                <td>: <?php echo $halaman3; ?> halaman</td>
                            </tr>
                            <tr>
                                <th>Berat</th>
                                <td>: <?php echo $berat3; ?> gram</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>: Rp <?php echo number_format($harga3, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>: <?php echo $stok3 ?> buku</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- BUKU 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><?php echo $judul4; ?></h5>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-info mb-2"><?php echo $kategori4; ?></span>
                        <table class="table table-borderless">
                            <tr>
                                <th>Pengarang</th>
                                <td>: <?php echo $pengarang4; ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>: <?php echo $penerbit4; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>: <?php echo $tahun_terbit4; ?></td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>: <?php echo $isbn4; ?></td>
                            </tr>
                            <tr>
                                <th>Bahasa</th>
                                <td>: <?php echo $bahasa4; ?></td>
                            </tr>
                            <tr>
                                <th>Halaman</th>
                                <td>: <?php echo $halaman4; ?> halaman</td>
                            </tr>
                            <tr>
                                <th>Berat</th>
                                <td>: <?php echo $berat4; ?> gram</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>: Rp <?php echo number_format($harga4, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>: <?php echo $stok4 ?> buku</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>