<!DOCTYPE html>
<html lang="en">
<body">
    <br><br><br>
    <div class="section-body" style="text-align: center;">
        <div class="card" style="width: 50%; margin:3% auto;">
            <div class="card-body">
                <form action="" method="post" class="verif" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="nim" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="nama" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Durasi Peminjaman</label>
                        <select class="custom-select" name="durasi">
                            <option selected class="box" disabled>-- Pilih Durasi --</option>
                            <option value="Tersedia">1SKS</option>
                            <option value="Terpakai">2SKS</option>
                            <option value="Terpakai">3SKS</option>
                        </select>
                    </div>
                    <input class="btn btn-success btn-user btn-block" name='submit' type="submit" value='Submit' />
                </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>