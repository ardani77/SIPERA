<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/insertUsers') ?>" method="post" class="btn btn-primary" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="username" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" name="password" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NRM</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nrm" maxlength="10" pattern="{0-9}+">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="full_name" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" name="jenis_kelamin">
                                <option selected class="box" disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select class="custom-select" name="prodi">
                                <option selected class="box" disabled>-- Pilih Prodi --</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Statistika">Statistika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <select class="custom-select" name="angkatan">
                                <option selected class="box" disabled>-- Pilih Angkatan --</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
