<?php
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan bahwa form telah dikirim
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Biasanya, informasi login akan disimpan dalam database.
        // Di sini, informasi login disimpan dalam array untuk keperluan contoh.
        $users = [
            'user1' => 'password1', // Ganti dengan informasi login yang sebenarnya
            'user2' => 'password2' // Ganti dengan informasi login yang sebenarnya
            // ... tambahkan lebih banyak jika diperlukan
        ];

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Periksa apakah username ada dalam daftar pengguna
        if (array_key_exists($username, $users)) {
            // Periksa apakah password yang dimasukkan sesuai dengan password yang tersimpan untuk username tersebut
            if ($password === $users[$username]) {
                // Login berhasil
                echo "Login berhasil untuk $username";
                // Di sinilah biasanya Anda akan mengatur sesi atau cookies untuk menyimpan status login
            } else {
                // Password salah
                echo "Password salah";
            }
        } else {
            // Username tidak ditemukan
            echo "Username tidak ditemukan";
        }
    } else {
        // Jika field username atau password tidak dikirimkan
        echo "Harap masukkan username dan password";
    }
}
?>

<!-- Form login -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
