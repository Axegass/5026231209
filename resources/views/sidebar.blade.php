<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sidebar.css">
        <title>Detail Ajuan Pesanan</title>
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script defer
            src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
       
    </style>
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-toggle">
                        <i class="fas fa-angle-double-left"></i> 
                </div>
                <br>
                <div class="sidebar-header">
                    <img src="Frame 40792-1.png" alt="Admin Profile">
                    <div class="admin-info">
                        <h4>Admin</h4>
                        <p>admin@example.com</p>
                    </div>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="fas fa-book"></i> Helperlog
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-search"></i> Helperfind
                        </a>
                    </li>
                </ul>
                <div class="logout">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-sign-out-alt"></i> Log Out
                    </a>
                </div>
            </nav>
            <div id="content">
                <h3><i class="fas fa-arrow-left"></i> Detail Ajuan Pesanan</h3>
                <br>
                <div class="card">
                    <h4 class="text-center">Proses Pengajuan Pesanan</h4>
                    <div class="progress-indicator">
                        <div class="completed"><i
                                class="fas fa-check-circle"></i><br>Ajuan
                            Dibuat</div>
                        <div class="active"><i
                                class="fas fa-clock"></i><br>Proses Review</div>
                        <div><i class="fas fa-circle"></i><br>Disetujui</div>
                    </div>
                    <table class="table">
                        <tr><td>ID Kontrak</td><td>: 12762387468234</td></tr>
                        <tr><td>Tanggal Pengajuan</td><td>: 5 Juli 2024, 12:57
                                WIB</td></tr>
                        <tr><td>Nama Pengaju</td><td>: Bayu Liano</td></tr>
                        <tr><td>Nama PRT</td><td>: Intan Permata</td></tr>
                        <tr><td>Pekerjaan</td><td>: Baby Sitter</td></tr>
                        <tr><td>Lama Kontrak</td><td>: 12 bulan</td></tr>
                        <tr><td>Nominal</td><td>: Rp 2.500.000,-</td></tr>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-success">Setuju</button>
                        <button class="btn btn-danger">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>