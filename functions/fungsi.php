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
?>
