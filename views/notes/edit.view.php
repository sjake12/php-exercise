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

      <form method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Fill in note body</label>
          <div class="mt-2">
            <textarea
              id="body"
              name="body"
              rows="3"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              placeholder="Here's an idea for a note..."
            ><?= $note['body'] ?>
            </textarea>
          </div>
          <?php
          if (isset($errors['body'])) : ?>
            <p class="mt-3 text-sm text-red-500"><?= $errors['body'] ?></p>
          <?php
          endif; ?>
        </div>

        <button
          type="submit"
          class="mt-4 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >Update
        </button>
        <a
          href="/notes"
          type="submit"
          class="mt-4 rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
        >Cancel
        </a>
      </form>
    </div>
  </main>

<?php
require base_path("views/partials/footer.php") ?>