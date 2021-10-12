<?php

if (!isset($_GET['page'])) {
    include "page/halaman_utama.php";
} else if ($_GET['page'] == "data_user") {
    include "page/user/data_user.php";
} else if ($_GET['page'] == "data_barang") {
    include "page/barang/data_barang.php";
} else if ($_GET['page'] == "data_transaksi") {
    include "page/transaksi/data_transaksi.php";
} else {
    echo "Logout";
}
