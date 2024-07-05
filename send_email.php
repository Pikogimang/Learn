<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $cita_cita = $_POST['cita_cita'];
    $makanan_favorit = $_POST['makanan_favorit'];
    $hobi = $_POST['hobi'];

    // Email pengirim dan penerima
    $pengirim = "hatiu48@gmail.com";
    $penerima = "barusaya0943@gmail.com";

    // Subjek email
    $subjek = "Jawaban dari Form Jawab Jujur";

    // Isi email
    $pesan = "Jawaban dari Form:\n\n";
    $pesan .= "1. Apa cita-citamu? \n$cita_cita\n\n";
    $pesan .= "2. Apa makanan Favoritmu? \n$makanan_favorit\n\n";
    $pesan .= "3. Apa hobimu? \n$hobi\n\n";

    // Headers
    $headers = "From: $pengirim";

    // Kirim email
    if (mail($penerima, $subjek, $pesan, $headers)) {
        echo "<script>alert('Jawaban telah berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Maaf, terjadi kesalahan dalam mengirim jawaban.');</script>";
    }
}
?>
