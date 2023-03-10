<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa STTNF</h1>
    <form action="belajar_post.php" method="POST">

        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
<!-- tipe random -->
        <label for="">Jenis Kelamin</label><br>
        <input type="Radio" nama="jenis_kelamin" value="laki-laki">
            <label for="">Laki-Laki</label>
        <input type="Radio" name="jenis_kelamin" value="perempuan">
            <label for="">Perempuan</label><br><br>
<!-- tipe checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="mata_kuliah" value="Basis Data">1
            <label for="">Basis Data</label><br>
        <input type="Checkbox" name="mata Kuliah" value="Bahasa Inggris">
            <label for="">Bahasa Inggris</label>
<!-- tipe number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br><br>
<!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informasi</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>
<!-- button -->
        <button type="Submit">Kirim</button>
        <Button type="button">Contoh</Button>
        <button Type="reset">Reset</button>
    </form>
</body>
</html>