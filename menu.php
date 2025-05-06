<nav>
    <ul>
        <?php
        foreach ($menu as $key => $value) {
            if ($key === 'belepes' && isset($_SESSION['user'])) continue;
            if ($key === 'kilepes' && !isset($_SESSION['user'])) continue;

            echo "<li><a href='index.php?page={$key}'>{$value}</a></li>";
        }
        ?>
    </ul>
</nav>
<main>