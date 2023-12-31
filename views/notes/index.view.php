<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>


    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="container flex justify-start text-4xl font-bold underline text-gray-900">
                <h1><?= $heading ?></h1>
            </div>
            <br>
            <hr>
            <div class="mx-auto mt-8 text-xl ">
                <ul class="list-disc list-inside">
                    <?php
                    foreach ($notes as $note):
                        echo '<li>
                        <a class="hover:underline hover:font-semibold text-fuchsia-900" href="/note?id=' . $note['id'] . '">'
                            . htmlspecialchars(strip_tags($note['body']))  .
                            '</a></li>';
                    endforeach;
                    ?>
                </ul>
            </div>
            <br>
                <p class="mt-5">
                    <a class="hover:underline text-2xl text-gray-900 font-bold" href="/notes/create">Create a Note</a>
                </p>

        </div>
    </main>
<?php require base_path("views/partials/footer.php") ?>