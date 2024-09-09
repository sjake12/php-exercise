<?php
require "partials/head.php";
require "partials/nav.php";
require "partials/banner.php";
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="text-blue-500 underline mb-6">
            <a href="./notes">go back...</a>
        </p>
        <?php foreach ($notes as $note) : ?>
            <p class="font-bold text-lg">
                <?= $note['body'] ?>
            </p>
        <?php endforeach ?>
    </div>
</main>

<?php require "partials/footer.php"; ?>