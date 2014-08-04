<?php
	$title = "Cheetyr – CSS Selectors Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>CSS</h1>
		<input id="search-sheet" placeholder="Type to filter sheet">
		<h2>Selectors</h2>
		<ul class="command-list">
			<li><p>.class</p>
			<p>Selects all elements with .class</p></li>
			<li><p>#id</p>
			<p>Selects all elements with #id</p></li>
			<li><p>*</p>
			<p>Selects all elements</p></li>
			<li><p>div</p>
			<p>Selects all &lt;div&gt; elements</p></li>
			<li><p>div, p</p>
			<p>Selects all &lt;div&gt; and &lt;p&gt; elements</p></li>
			<li><p>div > p</p>
			<p>Selects all &lt;p&gt; elements with a parent of &lt;div&gt;</p></li>
			<li><p>div + p</p>
			<p>Selects all &lt;p&gt; elements placed immediately after &lt;div&gt; elements</p></li>
			<li><p>div~ul</p>
			<p>Selects all &lt;ul&gt; elements preceded by &lt;div&gt; elements</p></li>
		</ul>
		<h2>Attributes</h2>
		<ul class="command-list">
			<li><p>[attribute]</p>
			<p>Selects all elements with the specified attribute</p></li>
			<li><p>[attribute=value]</p>
			<p>Selects all elements where the specified attribute is equal to ‘value’</p></li>
			<li><p>[attribute~=value]</p>
			<p>Selects all elements with an attribute containing the word ‘value’</p></li>
			<li><p>[attribute|=value]</p>
			<p>Selects all elements with an attribute list starting with ‘value’</p></li>
			<li><p>[attribute^=value]</p>
			<p>Selects all elements with an attribute beginning with ‘value’</p>
			<li><p>[attribute$=value]</p>
			<p>Selects all elements with an attribute ending with ‘value’</p></li>
			<li><p>[attribute*=value]</p>
			<p>Selects all elements with an attribute containing the substring ‘value’</p></li>
		</ul>
		<h2>Pseudo-classes</h2>
		<ul class="command-list">
			<li><p>a:link</p>
			<p>Selects all unvisited links</p></li>
			<li><p>a:visited</p>
			<p>Selects all visited links</p></li>
			<li><p>a:hover</p>
			<p>Selects links on mouse hover</p></li>
			<li><p>a:active</p>
			<p>Selects the active link element</p></li>
			<li><p>p::after</p>
			<p>Insert content after &lt;p&gt; element</p></li>
			<li><p>p::before</p>
			<p>Insert content before &lt;p&gt; element</p></li>
			<li><p>input:checked</p>
			<p>Selects every checked &lt;input&gt; element</p></li>
			<li><p>input:disabled</p>
			<p>Selects every disabled &lt;input&gt; element</p></li>
			<li><p>p:empty</p>
			<p>Selects every &lt;p&gt; element with no children</p></li>
			<li><p>input:enabled</p>
			<p>Selects every enabled &lt;input&gt; element</p></li>
			<li><p>p:first-child</p>
			<p>Selects every &lt;p&gt; element that is the first child of its parent</p></li>
			<li><p>p::first-letter</p>
			<p>Selects the first letter of every &lt;p&gt; element</p></li>
			<li><p>p::first-line</p>
			<p>Selects the first line of every &lt;p&gt; element</p></li>
			<li><p>p:first-of-type</p>
			<p>Selects every &lt;p&gt; element that is the first &lt;p&gt; element of its parent</p></li>
			<li><p>input:focus</p>
			<p>Selects the &lt;input&gt; element which has focus</p></li>
			<li><p>input:in-range</p>
			<p>Selects &lt;input&gt; elements with a value within a specified range</p></li>
			<li><p>input:invalid</p>
			<p>Selects all &lt;input&gt; elements with an invalid value</p></li>
			<li><p>p:lang(<em>language</em>)</p>
			<p>Selects all &lt;p&gt; elements with a lang attribute equal to ‘language’</p></li>
			<li><p>p:last-child</p>
			<p>Selects every &lt;p&gt; element which is the last child of its parent</p></li>
			<li><p>p:last-of-type</p>
			<p>Selects every &lt;p&gt; element which is the last &lt;p&gt; element of its parent</p></li>
			<li><p>:not(p)</p>
			<p>Selects every element that is not a &lt;p&gt;</p></li>
			<li><p>p:nth-child(2)</p>
			<p>Selects every &lt;p&gt; element that is the second child of its parent</p></li>
			<li><p>p:nth-last-child(2)</p>
			<p>Selects every &lt;p&gt; element that is the second child of its parent, counting from the last child</p></li>
			<li><p>p:nth-last-of-type(2)</p>
			<p>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent, counting from the last child</p></li>
			<li><p>p:nth-of-type(2)</p>
			<p>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent</p></li>
			<li><p>p:only-of-type</p>
			<p>Selects every &lt;p&gt; element that is the only &lt;p&gt; element of its parent</p></li>
			<li><p>p:only-child</p>
			<p>Selects every &lt;p&gt; element that is the only child of its parent</p></li>
			<li><p>input:optional</p>
			<p>Selects &lt;input&gt; elements with no ‘required’ attribute</p></li>
			<li><p>input:out-of-range</p>
			<p>Selects &lt;input&gt; elements with a value outside a specified range</p></li>
			<li><p>input:read-only</p>
			<p>Selects &lt;input&gt; elements with the ‘readonly’ attribute specified</p></li>
			<li><p>input:read-write</p>
			<p>Selects &lt;input&gt; elements with the ‘readonly’ attribute not specified</p></li>
			<li><p>input:required</p>
			<p>Selects &lt;input&gt; elements with the ‘required’ attribute specified</p></li>
			<li><p>:root</p>
			<p>Selects the documents root element</p></li>
			<li><p>::selection</p>
			<p>Selects the portion of an element that is selected by a user</p></li>
			<li><p>#id:target</p>
			<p>Selects the current active #id element</p></li>
			<li><p>input:valid</p>
			<p>Selects all &lt;input&gt; elements with a valid value</p></li>
		</ul>
	</main>
<?php include 'footer.php'; ?>