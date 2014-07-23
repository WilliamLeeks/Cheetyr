<?php
	$title = "Cheetyr – Vim Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>Vim</h1>
		<h2>Moving the Cursor</h2>
		<dl>
			<dt>h</dt>
			<dd>Move cursor left</dd>
			<dt>l</dt>
			<dd>Move cursor right</dd>
			<dt>k</dt>
			<dd>Move cursor up</dd>
			<dt>j</dt>
			<dd>Move cursor down</dd>
			<dt><em>n</em>G</dt>
			<dd>Move cursor to line <em>n</em></dd>
			<dt>$</dt>
			<dd>Move cursor to end of current line</dd>
			<dt>0</dt>
			<dd>Move cursor to beginning of current line</dd>
			<dt>w</dt>
			<dd>Move cursor forward one word</dd>
			<dt>b</dt>
			<dd>Move cursor backward one ward</dd>
		</dl>
		<h2>Save &amp; Exit</h2>
		<dl>
			<dt>:q</dt>
			<dd>Quit Vim (fails when changes have been made)</dd>
			<dt>:q!</dt>
			<dd>Quit without saving</dd>
			<dt>:cq</dt>
			<dd>Quit always, without saving</dd>
			<dt>:w</dt>
			<dd>Save current file</dd>
			<dt>:wq</dt>
			<dd>Save current file and exit</dd>
			<dt>:wq!</dt>
			<dd>Save current file and exit always</dd>
			<dt>:wq <em>[file]</em></dt>
			<dd>Save to <em>[file]</em>, exit if not editing the last</dd>
			<dt>:wq! <em>[file]</em></dt>
			<dd>Save to <em>[file]</em> and exit always</dd>
			<dt>:<em>[range]</em>wq</dt>
			<dd>Save only lines in <em>[range]</em> and exit</dd>
			<dt>ZZ</dt>
			<dd>Save current file, if modified, and exit</dd>
			<dt>ZQ</dt>
			<dd>Quit current file and exit</dd>
		</dl>
		<h2>Editing a File</h2>
		<dl>
			<dt>:e</dt>
			<dd>Edit the current file</dd>
			<dt>:e!</dt>
			<dd>Edit the current file always, discard any changes to current buffer</dd>
			<dt>:e <em>[file]</em></dt>
			<dd>Edit <em>[file]</em></dd>
			<dt>:e! <em>[file]</em></dt>
			<dd>Edit <em>[file]</em> always, discard any changes to current buffer</dd>
			<dt>gf</dt>
			<dd>Edit the file whose name is under or after the cursor</dd>
		</dl>
		<h2>Inserting Text</h2>
		<dl>
			<dt>a</dt>
			<dd>Append text after the cursor</dd>
			<dt>A</dt>
			<dd>Append text at the end of the line</dd>
			<dt>i</dt>
			<dd>Insert text before the cursor</dd>
			<dt>I</dt>
			<dd>Insert text before the first non-blank in the line</dd>
			<dt>o</dt>
			<dd>Begin a new line below the cursor and insert text</dd>
			<dt>O</dt>
			<dd>Begin a new line above the cursor and insert text</dd>
		</dl>
		<h2>Inserting a File</h2>
		<dl>
			<dt>:r <em>[name]</em></dt>
			<dd>Insert the file <em>[name]</em> below the cursor</dd>
			<dt>:r !<em>[cmd]</em></dt>
			<dd>Execute <em>[cmd]</em> and insert its standard output below the cursor</dd>
		</dl>
		<h2>Deleting Text</h2>
		<dl>
			<dt>x</dt>
			<dd>Delete characters under and after the cursor</dd>
			<dt>X</dt>
			<dd>Delete characters before the cursor</dd>
			<dt>d<em>[motion]</em></dt>
			<dd>Delete text that <em>[motion]</em> moves over</dd>
			<dt>dw</dt>
			<dd>Delete word from cursor on</dd>
			<dt>db</dt>
			<dd>Delete word backward</dd>
			<dt>d$</dt>
			<dd>Delete to end of line</dd>
			<dt>dd</dt>
			<dd>Delete lines</dd>
			<dt>D</dt>
			<dd>Delete the characters under the cursor until the end of the line</dd>
		</dl>
		<h2>Yank</h2>
		<dl>
			<dt>yy</dt>
			<dd>Yank current line</dd>
			<dt>y$</dt>
			<dd>Yank to end of line from cursor</dd>
			<dt>yw</dt>
			<dd>Yank from cursor to end of current word</dd>
			<dt><em>n</em>yy</dt>
			<dd>Yank <em>n</em> lines</dd>
		</dl>
		<h2>Paste</h2>
		<dl>
			<dt>p</dt>
			<dd>Paste below cursor</dd>
			<dt>P</dt>
			<dd>Paste above cursor</dd>
			<dt>u</dt>
			<dd>Undo last change</dd>
			<dt>U</dt>
			<dd>Restore line</dd>
			<dt>J</dt>
			<dd>Join next line down to current line</dd>
		</dl>
		<h2>Other Useful Commands</h2>
		<dl>
			<dt>.</dt>
			<dd>Repeat last command</dd>
			<dt>cw</dt>
			<dd>Change current word to new word</dd>
			<dt>r</dt>
			<dd>Replace one character at the cursor position</dd>
			<dt>R</dt>
			<dd>Begin overstrike or replace mode</dd>
			<dt>:/ <em>[pattern]</em></dt>
			<dd>Search forward for <em>[pattern]</em></dd>
			<dt>:? <em>[pattern]</em></dt>
			<dd>Search backward for <em>[pattern]</em></dd>
		</dl>
	</main>
<?php include 'footer.php'; ?>