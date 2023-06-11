<?php
// Host adınızı, veritabanı kullanıcı adınızı, şifrenizi ve veritabanı adınızı girin.
// Eğer localhost üzerinde veritabanı şifresi belirlemediyseniz boş bırakın./ Eğer localhost üzerinde veritabanı şifresi belirlemediyseniz boş bırakın.
$con = mysqli_connect("localhost", "root", "MblA*", "loginsystem");
// Bağlantıyı kontrol et
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>