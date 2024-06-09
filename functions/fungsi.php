<?php
function koneksi(){
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040072') or die ('koneksi ke db gagal');

    return $db;
}

function query($sql){

$conn = koneksi();


$result = mysqli_query($conn, $sql);

$rows = [];
while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
}

return $rows;
}


function tambah ($data)
{
    $conn = koneksi();

    $name =  htmlspecialchars ($data['name']);
    $places =  htmlspecialchars ($data['places']);
    $contact =  htmlspecialchars ($data['contact']);
    $photos =  htmlspecialchars ($data['photos']);
    $room =  htmlspecialchars ($data['room']);

    $sql = "INSERT INTO clinic
            VALUES (null, '$name', '$places', '$contact', '$photos', '$room')
    ";

    mysqli_query($conn, $sql) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus ($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM clinic WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah ($data)
{
    $conn = koneksi();

    $id =  htmlspecialchars ($data['id']);
    $name =  htmlspecialchars ($data['name']);
    $places =  htmlspecialchars ($data['places']);
    $contact =  htmlspecialchars ($data['contact']);
    $photos =  htmlspecialchars ($data['photos']);
    $room =  htmlspecialchars ($data['room']);

    $query = "UPDATE clinic SET
                
                name = '$name',
                places = '$places',
                contact = '$contact',
                photos = '$photos',
                room = '$room'
            WHERE id = $id
                ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM clinic
                WHERE 
                name LIKE '%$keyword%' OR
                places LIKE '%$keyword%' OR
                contact LIKE '%$keyword%' OR
                photos LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);

  // cek dulu username nya
  if ($user = query("SELECT * FROM users WHERE username = '$username'")[0]) {
    if (password_verify($password, $user['password'])) {
    // setvariables
      $_SESSION['login'] = true;
      $_SESSION['role'] = $user ['role'];
      $_SESSION['id_users'] = $user ['id_user'];

      if ($user['role'] == 'admin'){
        header('Location: ../admin/index_admin.php?id_user=' . $_SESSION['id_user']);
      } else{
        header('Location: ../admin/index_user.php?id_user=' . $_SESSION['id_user']);
      }
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
    $conn = koneksi();

$username = htmlspecialchars(strtolower( $data ['username']));
$password1 = mysqli_real_escape_string($conn, $data ['password1']);
$password2 = mysqli_real_escape_string($conn, $data ['password2']);


// jika username / password kosong
if(empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
    alert('username / password tidak boleh kosong');
    document.location.href = 'registrasi.php';
        </script>";
        return false;
}

// jika username sudah ada

if (query("SELECT * FROM users WHERE username = '$username'")){
    echo "<script>
    alert('username sudah terdaftar');
    document.location.href = 'registrasi.php';
        </script>";
        return false;
}

// jika konfirmasi password tidak sesuai
if($password1 !== $password2) {
    echo "<script>
    alert('password tidak sesuai');
    document.location.href = 'registrasi.php';
        </script>";
        return false;
}
// get role from user input
$role = 'users';
// jika username dan password sesuai
// enskripsi pass
$password_baru = password_hash($password1, PASSWORD_DEFAULT);
// INSERT KE TABel USERs
$query = "INSERT INTO users (username,password, role)
         VALUES
         ('$username', '$password_baru','$role')";

mysqli_query($conn, $query) or die (mysqli_error($conn));
return mysqli_affected_rows($conn); 
}
?>
