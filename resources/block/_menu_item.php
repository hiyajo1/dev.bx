<?php
/** @var string $genre */
/** @var string $selectedPage */
/** @var string $key */
/** @var string $genre_name */
?>

<!-- .\resources\block\_menu_item.php-->



<li class = "menu-item <?=
($selectedPage === $key ? 'menu-item--active' : '')?>">
	<a href="./index.php?genre=<?= $key?>"><?= $genre?></a>
</li>