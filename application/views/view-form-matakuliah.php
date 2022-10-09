<html>
    <head>
        <title>Form Input Matakuliah</title>
    </head>
    <body>
        <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>"method="post">
        <table>
            <tr>
                <th colspan="3">Form Input Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode" required oninvalid="this.setCustomValidity('Kode Matakuliah Wajib diisi minimal 3 angka')" 
                    oninput="this.setCustomValidity('')" autocomplete="off" minlength="3" maxlength="7">
                </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" required oninvalid="this.setCustomValidity('Nama Matakuliah Wajib diisi')"
                    oninput="this.setCustomValidity('')" autocomplete="off">
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks" required oninvalid="this.setCustomValidity('Pilih jumlah sks')"
                    oninput="this.setCustomValidity('')">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
            </td>
            </tr>
        </table>
        </form>
        </center>
</body>
</html>
