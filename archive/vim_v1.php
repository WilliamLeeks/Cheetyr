<?php
	$title = "Cheetyr – Vim Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>Vim</h1>
		<input id="search-sheet" placeholder="Type to filter sheet">
		<h2>Moving the Cursor</h2>
		<ul class="command-list">
			<li><p>h</p>
			<p>Move cursor left</p></li>
			<li><p>l</p>
			<p>Move cursor right</p></li>
			<li><p>k</p>
			<p>Move cursor up</p></li>
			<li><p>j</p>
			<p>Move cursor down</p></li>
			<li><p><em>n</em>G</p>
			<p>Move cursor to line <em>n</em></p></li>
			<li><p>$</p>
			<p>Move cursor to end of current line</p></li>
			<li><p>0</p>
			<p>Move cursor to beginning of current line</p></li>
			<li><p>w</p>
			<p>Move cursor forward one word</p></li>
			<li><p>b</p>
			<p>Move cursor backward one ward</p></li>
		</ul>
		<h2>Save &amp; Exit</h2>
		<ul class="command-list">
			<li><p>:q</p>
			<p>Quit Vim (fails when changes have been made)</p></li>
			<li><p>:q!</p>
			<p>Quit without saving</p></li>
			<li><p>:cq</p>
			<p>Quit always, without saving</p></li>
			<li><p>:w</p>
			<p>Save current file</p></li>
			<li><p>:wq</p>
			<p>Save current file and exit</p></li>
			<li><p>:wq!</p>
			<p>Save current file and exit always</p></li>
			<li><p>:wq <em>[file]</em></p>
			<p>Save to <em>[file]</em>, exit if not editing the last</p></li>
			<li><p>:wq! <em>[file]</em></p>
			<p>Save to <em>[file]</em> and exit always</p></li>
			<li><p>:<em>[range]</em>wq</p>
			<p>Save only lines in <em>[range]</em> and exit</p></li>
			<li><p>ZZ</p>
			<p>Save current file, if modified, and exit</p></li>
			<li><p>ZQ</p>
			<p>Quit current file and exit</p></li>
		</ul>
		<h2>Editing a File</h2>
		<ul class="command-list">
			<li><p>:e</p>
			<p>Edit the current file</p></li>
			<li><p>:e!</p>
			<p>Edit the current file always, discard any changes to current buffer</p></li>
			<li><p>:e <em>[file]</em></p>
			<p>Edit <em>[file]</em></p></li>
			<li><p>:e! <em>[file]</em></p>
			<p>Edit <em>[file]</em> always, discard any changes to current buffer</p></li>
			<li><p>gf</p>
			<p>Edit the file whose name is under or after the cursor</p></li>
		</ul>
		<h2>Inserting Text</h2>
		<ul class="command-list">
			<li><p>a</p>
			<p>Append text after the cursor</p></li>
			<li><p>A</p>
			<p>Append text at the end of the line</p></li>
			<li><p>i</p>
			<p>Insert text before the cursor</p></li>
			<li><p>I</p>
			<p>Insert text before the first non-blank in the line</p></li>
			<li><p>o</p>
			<p>Begin a new line below the cursor and insert text</p></li>
			<li><p>O</p>
			<p>Begin a new line above the cursor and insert text</p></li>
		</ul>
		<h2>Inserting a File</h2>
		<ul class="command-list">
			<li><p>:r <em>[name]</em></p>
			<p>Insert the file <em>[name]</em> below the cursor</p></li>
			<li><p>:r !<em>[cmd]</em></p>
			<p>Execute <em>[cmd]</em> and insert its standard output below the cursor</p></li>
		</ul>
		<h2>Deleting Text</h2>
		<ul class="command-list">
			<li><p>x</p>
			<p>Delete characters under and after the cursor</p></li>
			<li><p>X</p>
			<p>Delete characters before the cursor</p></li>
			<li><p>d<em>[motion]</em></p>
			<p>Delete text that <em>[motion]</em> moves over</p></li>
			<li><p>dw</p>
			<p>Delete word from cursor on</p></li>
			<li><p>db</p>
			<p>Delete word backward</p></li>
			<li><p>d$</p>
			<p>Delete to end of line</p></li>
			<li><p>dd</p>
			<p>Delete lines</p></li>
			<li><p>D</p>
			<p>Delete the characters under the cursor until the end of the line</p></li>
		</ul>
		<h2>Yank</h2>
		<ul class="command-list">
			<li><p>yy</p>
			<p>Yank current line</p></li>
			<li><p>y$</p>
			<p>Yank to end of line from cursor</p></li>
			<li><p>yw</p>
			<p>Yank from cursor to end of current word</p></li>
			<li><p><em>n</em>yy</p>
			<p>Yank <em>n</em> lines</p></li>
		</ul>
		<h2>Paste</h2>
		<ul class="command-list">
			<li><p>p</p>
			<p>Paste below cursor</p></li>
			<li><p>P</p>
			<p>Paste above cursor</p></li>
			<li><p>u</p>
			<p>Undo last change</p></li>
			<li><p>U</p>
			<p>Restore line</p></li>
			<li><p>J</p>
			<p>Join next line down to current line</p></li>
		</ul>
		<h2>Other Useful Commands</h2>
		<ul class="command-list">
			<li><p>.</p>
			<p>Repeat last command</p></li>
			<li><p>cw</p>
			<p>Change current word to new word</p></li>
			<li><p>r</p>
			<p>Replace one character at the cursor position</p></li>
			<li><p>R</p>
			<p>Begin overstrike or replace mode</p></li>
			<li><p>:/ <em>[pattern]</em></p>
			<p>Search forward for <em>[pattern]</em></p></li>
			<li><p>:? <em>[pattern]</em></p>
			<p>Search backward for <em>[pattern]</em></p></li>
		</ul>
	</main>
<?php include 'footer.php'; ?>