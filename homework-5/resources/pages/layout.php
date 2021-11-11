<?php
/** @var string $content */
/** @var string $menu */
/** @var array $genres */
/** @var string $homeId */
/** @var string $favoriteId */
/** @var string $selectedPage*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./resources/css/reset.css">
	<link rel="stylesheet" href="./resources/css/style.css">
	<title>Bitflix</title>
</head>
<body class="body">
<div class="wrapper">
	<div class="sidebar">
		<div class="menu">
            <!-- <div class="text_logo">
                Bitflix
            </div>
            <div class="ellipse">

            </div> -->
			<div class="menu-image"><svg width="389" height="141" viewBox="0 0 389 141" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M85.0766 0.799995H101.013C106.453 0.799995 110.421 2.08 112.917 4.64C115.413 7.136 116.661 11.008 116.661 16.256V18.944C116.661 22.4 116.085 25.216 114.933 27.392C113.845 29.568 112.149 31.136 109.845 32.096V32.288C115.093 34.08 117.717 38.752 117.717 46.304V52.064C117.717 57.248 116.341 61.216 113.589 63.968C110.901 66.656 106.933 68 101.685 68H85.0766V0.799995ZM99.7646 28.16C101.877 28.16 103.445 27.616 104.469 26.528C105.557 25.44 106.101 23.616 106.101 21.056V17.312C106.101 14.88 105.653 13.12 104.757 12.032C103.925 10.944 102.581 10.4 100.725 10.4H95.6366V28.16H99.7646ZM101.685 58.4C103.541 58.4 104.917 57.92 105.813 56.96C106.709 55.936 107.157 54.208 107.157 51.776V45.92C107.157 42.848 106.613 40.736 105.525 39.584C104.501 38.368 102.773 37.76 100.341 37.76H95.6366V58.4H101.685ZM123.889 0.799995H134.449V68H123.889V0.799995ZM150.614 10.4H139.574V0.799995H172.214V10.4H161.174V68H150.614V10.4ZM177.327 0.799995H205.263V10.4H187.887V29.12H201.519V38.72H187.887V68H177.327V0.799995ZM210.327 0.799995H220.887V58.4H238.263V68H210.327V0.799995ZM243.327 0.799995H253.887V68H243.327V0.799995ZM271.107 33.632L259.491 0.799995H270.627L277.731 22.496H277.923L285.219 0.799995H295.203L283.587 33.632L295.779 68H284.643L276.963 44.576H276.771L268.899 68H258.915L271.107 33.632Z" fill="#43B0ED"/>
					<path d="M389 101.5C389 123.315 299.905 141 190 141C80.0953 141 -9 123.315 -9 101.5C-9 79.6848 80.0953 62 190 62C299.905 62 389 79.6848 389 101.5Z" fill="#383838"/>
				</svg>
			</div>
			<ul>
				<li class = "menu-item <?= ($selectedPage === 'index') ? 'menu-item--active' : ''?>">
					<a href="./index.php"><?=$homeId?></a>
				</li>
				<?
				foreach ($genres as $key => $genre)  {
					echo renderTemplate('.\resources\block\_menu_item.php', [
						'genre' => $genre,
						'selectedPage' => $selectedPage,
						'key' => $key
						]);
				}?>
				<li class = "menu-item <?= ($selectedPage === 'favorite') ? 'menu-item--active' : ''?>">
					<a href="./favorite.php"><?= $favoriteId?></a>
				</li>

			</ul>
		</div>
	</div>
	<div class="container">
		<div class="header">
			<div class="search-bar">
				<div class="search-bar-icon">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M19 19L14.65 14.65" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

				</div>
				<div class="search-bar-text">
					<form action="index.php" method="get">
					<input class="search-bar-text-input" type="text" name="search" placeholder="Поиск по каталогу">
					<input class="button-find" type="submit" value="Искать"/>
					</form>
				</div>
			</div>

			<div class="button-add">
				<form action="add.php">
					<input type="submit" value="Добавить фильм"/>
				</form>
			</div>
		</div>
		<div class="content">
			<?=	$content ?>
		</div>
	</div>
</div>
</body>
</html>
