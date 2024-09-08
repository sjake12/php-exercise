<?php
require "partials/head.php";
require "partials/nav.php";
require "partials/banner.php";
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <?php foreach ($users as $user) : ?>
            <li><a href="id=<?= $user['id'] ?>" class="hover:underline"><?= $user['name'] ?></a></li>
        <?php endforeach ?>
    </div>
</main>

<?php require "partials/footer.php"; ?>