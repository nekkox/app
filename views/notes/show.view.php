<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container flex justify-left text-4xl font-bold underline text-gray-900">
            <h1><?= $heading?></h1>
            <a class="text-blue-500 text-xl" href="/notes">Back To All Recent Notes...</a>
        </div>
    </div>
    <div class=" w-full flex justify-center">
        <p class="text-xl mt-5 align-middle"><?= htmlspecialchars(strip_tags($note['body'])) ?></p>
    </div>
    <hr>
    <br>
    <form class="ml-36" method="POST">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="py-2 px-4  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-indigo-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">Delete</button>
    </form>



</main>
<?php require base_path("views/partials/footer.php") ?>