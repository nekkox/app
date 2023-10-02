<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container flex justify-left text-4xl font-bold underline text-gray-900">
            <h1><?= $heading?></h1>
            <a class="text-blue-500 text-xl" href="/app/notes">Back To All Recent Notes...</a>
        </div>
    </div>
    <div class=" w-full flex justify-center">
        <p class="text-xl mt-5 align-middle">
            <?= htmlspecialchars(strip_tags($note['body'])) ?>

        </p>
    </div>
    <hr>
    <br>
    <h2 class="font-semibold flex justify-center text-fuchsia-900 text-2xl">Fibonacci Numbers: </h2>


</main>
<?php require "views/partials/footer.php" ?>
