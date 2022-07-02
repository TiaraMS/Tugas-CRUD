<h1>Tambah Nama</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_kk" placeholder="No. KK"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="5"></textarea><br>
    <input class="btn btn-danger" type="submit" name="submit" value="Save">

</form>