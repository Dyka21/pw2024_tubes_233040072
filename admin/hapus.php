<?php 
require '../functions/fungsi.php';
$id = $_GET['id']; {
    if (hapus($id) > 0) {
        echo "<script>
                    alert ('data berhasil dihapus!');
                    document.location.href = 'index_admin.php';
                </script>";
    }
    
}
?> 