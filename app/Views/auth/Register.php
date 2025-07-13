<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - Toko Batik</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
</head>
<body>
<div class="container">
    <!-- Logo -->
    <div class="logo-container">
        <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Perusahaan">
    </div>

    <!-- Form -->
    <div class="form-container">
        <h2>Selamat Datang!</h2>
        <p class="welcome-text">
            Yuk buat akun baru untuk mulai menjelajahi koleksi batik eksklusif dari kami. Proses cepat & mudah!
        </p>

        <!-- ✅ Notifikasi sukses -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- ✅ Error email sudah ada -->
        <?php if (isset($email_error)): ?>
            <div class="error">
                <?= $email_error ?>
            </div>
        <?php endif; ?>

        <!-- ✅ Error password tidak cocok -->
        <?php if (isset($password_error)): ?>
            <div class="error">
                <?= $password_error ?>
            </div>
        <?php endif; ?>

        <!-- ✅ Validasi form -->
        <?php if (isset($validation)): ?>
            <div class="error">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('register/proses') ?>" method="post">
            <input type="text" name="username" placeholder="Username"
                   value="<?= isset($old['username']) ? $old['username'] : old('username') ?>">
            <input type="email" name="email" placeholder="Email"
                   value="<?= isset($old['email']) ? $old['email'] : old('email') ?>">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Konfirmasi Password">
            <button type="submit">Register Now</button>
        </form>
    </div>
</div>

</body>
</html>
