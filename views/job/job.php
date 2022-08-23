<main>
    <section class="recrutement_title">
        <h1>Wattohm recrute !</h1>
        <div class="overlay_intro"></div>
    </section>
    <section class="how">
        <h2>Comment cela se passe ?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
    <?php foreach ($params['jobs'] as $jobs): ?>
    <section class="emploi">
        <h2><?= $jobs['title'] ?></h2>
            <h3><?= $jobs['contract'] ?></h3>
            <h3><?= $jobs['localisation'] ?></h3>
            <h3><?= $jobs['salary'] ?></h3>
            <p><?= $jobs['text'] ?></p>
    </section>
</main>

<?php endforeach ?>