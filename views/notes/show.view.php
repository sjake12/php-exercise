<?php

require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>
  <main >
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" >
      <!-- Your content -->
      <p class="text-blue-500 underline mb-6" >
        <a href="/notes" >go back...</a >
      </p >

      <p class="font-bold text-lg" >
        <?= htmlspecialchars($note['body']) ?>
      </p >

      <footer class="mt-6 flex items-center gap-4" >
        <div >
          <a
            href="/note/edit?id=<?= $note['id'] ?>"
            class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
          >Edit
          </a >
        </div >
        <form method="post" >
          <input type="hidden" name="_method" value="DELETE" >
          <input type="hidden" name="id" value="<?= $note['id'] ?>" >
          <button
            type="submit"
            class="text-sm bg-red-500 text-white px-3 py-2 rounded-md shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
          >Delete
          </button >
        </form >
      </footer >

    </div >
  </main >

<?php
require base_path("views/partials/footer.php") ?>