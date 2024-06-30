<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        body[data-bs-theme='dark'] {
            background-color: #343a40;
            color: #fff;
        }

        body[data-bs-theme='light'] {
            background-color: #fff;
            color: #000;
        }

        .form-control,
        .form-select {
            background-color: #343a40;
            color: #fff;
        }

        .form-control::placeholder {
            color: #ccc;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #343a40;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" class="form-control" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" class="form-control" name="pekerjaan"></td>
            </tr>
            <tr>
                <td>Jenis Servis</td>
                <td>
                    <select name="jenis_servis" class="form-select" id="jenis_servis">
                        <option value="">Pilih Jenis Servis</option>
                        <option value="Ganti oli mesin">Ganti oli mesin - 50k</option>
                        <option value="Tune up">Tune up - 70k</option>
                        <option value="Ganti oli gardan">Ganti oli gardan - 15k</option>
                        <option value="Ganti busi">Ganti busi - 50k</option>
                        <option value="Ganti filter udara">Ganti filter udara - 60k</option>
                        <option value="Ganti kampas rem">Ganti kampas rem - 60k</option>
                        <option value="Perawatan aki">Perawatan aki - 150k</option>
                        <option value="Bongkar pasang mesin">Bongkar pasang mesin - 500k</option>
                        <option value="Tambal ban">Tambal ban - 15k</option>
                        <option value="Bore up">Bore up - 700k</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <!-- Toggle Theme Button -->
    <div class="text-center mt-3">
        <button class="btn btn-primary" onclick="toggleTheme()">Toggle Theme</button>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            
            if (newTheme === 'dark') {
                document.body.style.backgroundColor = '#343a40';
                document.body.style.color = '#fff';
            } else {
                document.body.style.backgroundColor = '#fff';
                document.body.style.color = '#000';
            }
        }
    </script>
</body>
</html>
