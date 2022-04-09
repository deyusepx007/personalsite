<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                REGISTRASI
            </div>      
            <div class="card-body">
                <?php print $pesan ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" nama="nik" class="from-control" placeholder="NIK" reguired autofokus>
                    </div>
                    <div class="form-group">
                        <input type="text" nama="nama" class="from-control" placeholder="Nama lengkap" reguired>
                    </div>
                    <div class="form-group">
                        <input type="text" nama="username" class="from-control" placeholder="Username" reguired>
                    </div>
                    <div class="form-group">
                        <input type="password" nama="password" class="from-control" placeholder="Password" reguired>
                    </div>
                    <div class="form-group">
                        <label for="">No.Telepon</label>
                        <input type="number" class="from-control" placeholder="No.Telepon" reguired>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">kirim</button>
                    </div>
                    <a href="?menu=login" class="text-muted">sudah punya akun?Login disini</a>
                </from>
            </div>
        </div>        
    </div>
</div>