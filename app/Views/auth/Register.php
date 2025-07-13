<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - Toko Batik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #8B0000;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #a40000;
        }

        .error {
            background-color: #ffe5e5;
            color: #b30000;
            padding: 10px;
            margin-bottom: 15px;
            border-left: 4px solid #ff4d4d;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h2>Daftar Akun Baru</h2>

    <?php if (isset($validation)): ?>
        <div class="error">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('register/proses') ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?= old('username') ?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= old('email') ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="confirm_password">Konfirmasi Password</label>
        <input type="password" name="confirm_password" id="confirm_password">

        <!-- Tambahkan field 'role' jika ingin pengguna memilih peran -->
        <!-- <label for="role">Role</label>
        <select name="role" id="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select> -->

        <button type="submit">Daftar</button>
    </form>
</div>

</body>
</html>
