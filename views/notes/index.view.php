<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <?php foreach ($notes as $note) : ?>
            <li><a href="./note?id=<?= $note['id'] ?>" class="hover:underline"><?= htmlspecialchars($note['body']) ?></a></li>
        <?php endforeach ?>

        <p class="text-blue-500 underline font-semibold mt-4">
            <a href="/php-exercise/note-create">Create new note...</a>
        </p>
    </div>
</main>
<?php require base_path("views/partials/footer.php") ?>