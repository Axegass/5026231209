<html>
    <head>
        <title>Kalkulator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function hello(){
                alert("Selamat Anda mendapatkan hadiah 1 milyar");
            }

            function tambah(){
                var bilangan1 = document.getElementById(bil).value;
                var bilangan2 = document.getElementById(bil2).value;
                var hasil = Number.parseInt(bilangan1) +  Number.parseInt(bilangan2);

                document.getElementById("hasil").innerHTML = hasil;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary" onclick="hello();">Klik disini</button>
            <p>
                Bilangan pertama:
                <input type="text" id="bil" value="0" class="form-control">
                <br>
                Bilangan kedua:
                <input type="text" id="bil2" value="0" class="form-control">
                <br>
                Hasil penjumlahan:
                <br>
                <div id="hasil"></div>
                <button class="btn btn-success" onclick="tambah();">Klik disini</button>
            </p>
        </div>
    </body>
</html>