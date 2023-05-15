<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="P3. simpankontak.php">
    <h2>Tambah Kontak</h2>
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="id"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td><input type="textarea" name="pesan"></td>
            </tr>
            <tr>
                <br>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
        <br>
        <a text-align="justify" href="P2. tampilkontak.php">Kembali</a>
    </form>
</body>

</html>