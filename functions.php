<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'armbanduhr_db';
 //koneksi ke database phpdasar
    $db = mysqli_connect($host, $user, $password, $database);

    //fetch product data
    function query($query)
    {
        global $db;

        $result = mysqli_query($db, $query);

        $rows = [];

        //ambil data/array tiap record per row
        while ($row = mysqli_fetch_assoc($result)) {
            //tiap row disimpan di rows
            $rows[] = $row;

        }
        return $rows;
    }

    $product_shuffle = query("SELECT * FROM product");
    $product_specs = query("SELECT * FROM product_specs");

    function registrasi($data){
        global $db;

        $username = strtolower(stripcslashes($data["username"]));
        $email = strtolower(stripcslashes($data["email"]));
        $password = mysqli_real_escape_string($db, $data["password"]);
        $repassword = mysqli_real_escape_string($db, $data["repassword"]);

        // //cek kosong
        // if( empty($username) || empty($email) || empty($password)) {
        //     echo "<script> 
        //             alert('Fill All the Required Form!');
        //             </script>";
        //     return false;
        // }

        //cek username agar tidak boleh sama
        $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
        if( mysqli_fetch_assoc($result)) {
            echo "<script> 
                    alert('Username Already Exists, Use Another Username');
                    </script>";
            return false;
        }

        //cek konfirmasi password
        if ($password !== $repassword) {
            echo "<script>
                        alert('The Password Confirmation Does Not Match, Failed to Register');
                    </script>";
            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambah ke database
        mysqli_query($db, "INSERT INTO users VALUES('', '$username', '$email', '$password')");

        return mysqli_affected_rows($db);
    }
?>