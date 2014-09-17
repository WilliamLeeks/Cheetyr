<main>
	<?php
		$data = file_get_contents('data/' . $sheet . '.json');
		$content = json_decode($data, true);
	?>
	<?php if($platformToggle) : ?>
	<div class="platform-toggles">
		<button class="js--setPlatformMac js--platform-toggle js--platform-toggle--active">Mac</button>
		<button class="js--setPlatformWindows js--platform-toggle">Windows</button>
	</div>
	<? endif ?>
	<h1 class="sheet-name"><?php echo $content['pageTitle']; ?></h1>
	<input id="search-sheet" placeholder="Type to filter sheet">
	<?php
		foreach ($content['sections'] as $key => $value) {
			echo '<h2>' . $value['sectionTitle'] . '</h2>';
			echo '<ul class="command-list">';
			foreach ($value['shortcuts'] as $key => $shortcut) {
				echo '<li><p>';
				echo $shortcut['shortcut'];
				echo '</p><p>';
				echo $shortcut['details'];
				echo '</p></li>';
			}
			echo '</ul>';
		}
	?>
</main>