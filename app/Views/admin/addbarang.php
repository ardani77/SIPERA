<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Barang</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/Admin/insertBarang" method="post" class="btn btn-primary" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama_barang" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="stock" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="status" size="50">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
