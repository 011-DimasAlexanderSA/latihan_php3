<?php

require_once "config/data.php";
require_once "config/functions.php";

include "templates/header.php";
include "templates/navbar.php";
?>

<div class="container">
    <div class="card">
        <h1>Data Nilai Siswa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Daftar Nilai</th>
                    <th>Rata-rata</th>
                    <th>Status Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $s) : ?>
                    <?php
                        $nilai = $s["nilai"];
                        $rataRata = hitungRataRata($nilai);
                        $status = cekKelulusan($rataRata);
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($s["nama"]); ?></td>
                        <td><?= implode(", ", $nilai); ?></td>
                        <td><?= number_format($rataRata, 2); ?></td>
                        <td><?= $status; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "templates/footer.php"; ?>


