<div class="container">
    <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="sticky-top">
                <div class="mb-3">
                    <h3 class="text-center">Data Pegawai</h3>
                </div>
                <div class="mb-3">
                    <form class="d-flex" action="<?= base_url('pegawai/search'); ?>" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Cari Pegawai" aria-label="Search" name="keyword">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pegawai as $pgw):?> 
                            <tr>
                                <td><?= $pgw['nama']; ?></td>
                                <td><?= $pgw['username']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

