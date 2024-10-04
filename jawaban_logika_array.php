<?php
function test($lst, $target) {
    $flag = false;
    $list_res = array();

    if (count($lst) == 0) {
        return "array kosong";
    }

    for ($i = 0; $i < count($lst); $i++) {
        for ($j = $i + 1; $j < count($lst); $j++) {
            if ($lst[$i] + $lst[$j] == $target) {
                $flag = true;
                array_push($list_res, array($i, $j));
            }
        }
    }

    if (!$flag) {
        return "tidak ada nilai yang cocok dengan target";
    }
    return $list_res;
}

// Contoh penggunaan
$hasil = test(array(1, 2, 7, 8, 9, 10), 9); // Misalnya, mencari pasangan yang jumlahnya 9
if (is_array($hasil)) {
    foreach ($hasil as $pasangan) {
        echo "[" . $pasangan[0] . ", " . $pasangan[1] . "]\n";
    }
} else {
    echo $hasil;
}

?>