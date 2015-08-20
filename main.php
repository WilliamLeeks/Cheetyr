<main>
	<?php
		$data = file_get_contents('data/' . $sheet . '.json');
		$content = json_decode($data, true);
		function stripChars($var) {
			$var = preg_replace("/[^A-Za-z0-9]/", "", $var);
			return $var;
		}
	?>
	<h1 class="sheet-name"><?php echo $content['pageTitle']; ?></h1>
	<input id="search-sheet" placeholder="Type to filter sheet">
	<div class="sheet-index">
		<h3>Index</h3>
		<ol class="sheet-index_list">
		<?php
			foreach ($content['sections'] as $key => $value) {
				echo '<li><a href="#' . stripChars($value['sectionTitle']) . '">' . $value['sectionTitle'] . '</a></li>'; 
			}
		?>
		</ol>
	</div>
	<?php
		foreach ($content['sections'] as $key => $value) {
			echo '<h2 id="' . stripChars($value['sectionTitle']) . '">' . $value['sectionTitle'] . '</h2>';
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