<!-- Header -->
<?php require('partials/header.php') ?>
<!-- Navbar -->
    <?php require('partials/nav.php') ?>
    <!-- Akhir Navbar -->
<!-- halaman home -->
<div class="container">
    <h1>Halaman Home</h1>
    <h3>Daftar Mahassiwa</h3>
    <?php foreach($students as $student) : ?>
        <ul>
            <li>nama: <?= $student["nama"] ?></li>
            <li>Npm: <?= $student["npm"] ?></li>
            <li>Email: <?= $student["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</div>
<!-- Footer -->
<?php require('partials/footer.php') ?>