<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="text-blue-500 underline mb-6">
            <a href="/notes">go back...</a>
        </p>

        <p class="font-bold text-lg">
            <?= htmlspecialchars($note['body']) ?>
        </p>

        <form class="mt-6" method="post" action="/note">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="submit" class="text-sm text-red-500">Delete</button>
        </form>

    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>