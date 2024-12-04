<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fafafa;
            color: #333; 
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px; 
            margin-top: 50px; 
        }
        .profile-card {
            background: #ffffff; 
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .profile-card img {
            border-radius: 50%;
            border: 4px solid #007bff;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .profile-card h2 {
            margin: 10px 0;
            font-size: 24px;
        }
        .profile-card p {
            color: #777; 
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            margin-top: 20px;
        }
        .table th, .table td {
            border: none;
            text-align: left;
        }
        .table th {
            color: #007bff; 
            font-weight: bold;
        }
        .table td {
            color: #333;
        }
        .highlight {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <img src="<?= $foto; ?>" alt="foto profil" class="img-fluid">
            <h2><?= esc($nama) ?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td class="nama"><?= esc($nama) ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td class="nim"><?= esc($nim) ?></td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td class="jurusan"><?= esc($jurusan) ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td class="kelas"><?= esc($kelas) ?></td>
                    </tr>
                    <tr>
                        <th>Konsentrasi</th>
                        <td class="konsentrasi"><?= esc($konsentrasi) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>