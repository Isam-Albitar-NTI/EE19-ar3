<main class="main-entry">
    <h2 id="enterNumber">Enter a number:</h2>
    <form class="main-entry_form" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        <input class="main-entry_input" id="num" name="num" aria-labelledby="enterNumber" type="text" maxlength="2" autofocus required>
        <button class="main-entry_button">Go!</button>
    </form>
</main>