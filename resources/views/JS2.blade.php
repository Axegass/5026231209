<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
<script>
    function formValidation() {
        var nrp = document.getElementById("nrp").value();
        var nama = document.getElementById("nama").value();

        if (nrp.length !== 10 || isNaN(nrp)) {
            Swal.fire({
                title: "Isi NRP dengan benar!",
                text: "NRP harus 10 digit dan cuma angka doang",
                icon: "error"
            });
            return false;
        }

        if (nama == "" || /\d/test(nama)) {
            Swal.fire({
                title: "Isi Nama dengan benar!",
                text: "Nama cuma boleh huruf (tanpa angka atau simbol)",
                icon: "error"
            });
            return false;
        }

        return true;
    }

</script>
</head>
<body>
<div class="container">
    <h3>Form Pendaftaran ISE!</h3>
    <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="formValidation();">
        NRP : <input type="text" id="nrp" name="nrp" class="form-control" placeholder="Silahkan isi NRP Anda , 10 digit , harus angka , gak boleh kosong" >
        <br>
        Nama : <input type="text" id="nama" name="nama" class="form-control" placeholder="Silahkan isi Nama Anda , min. 1 huruf , gak boleh angka doang">
        <br>
        <input type="submit" class="btn btn-primary" value="Daftar">
    </form>
</div>
</body>
</html>