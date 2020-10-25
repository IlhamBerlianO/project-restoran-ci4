<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

        <div class="col">
        <?php
            if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger" role="alert">';
                $error = session()->getFlashdata('info');
                foreach ($error as $key => $value) {
                    echo $key."->".$value;
                    echo "</br>";
                }
                echo '</div>';
            }
            
        ?>
    </div>

    <div class="col">
        <h2>INSERT USER</h2>
    </div>

    <div class="col-8">
        <form action="<?= base_url('/admin/user/insert') ?>" method="post">
            <div class="form-group">
                <label for="Kategori">User</label>
                <input type="text" name="user" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Keterangan">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Keterangan">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gambar">Level</label>
                <select class="form-control" name="level" id="idkategori">
                    <?php foreach($level as $key) : ?>
                        <option value="<?= $key?>">
                            <?= $key?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary"> 
            </div>
        </form>
    </div>
<?= $this->endSection() ?>