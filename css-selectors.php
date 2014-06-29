<?php
	$title = "Cheetyr – CSS Selectors Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>CSS</h1>
		<h2>Selectors</h2>
		<dl>
			<dt>.class</dt>
			<dd>Selects all elements with .class</dd>
			<dt>#id</dt>
			<dd>Selects all elements with #id</dd>
			<dt>*</dt>
			<dd>Selects all elements</dd>
			<dt>div</dt>
			<dd>Selects all &lt;div&gt; elements</dd>
			<dt>div, p</dt>
			<dd>Selects all &lt;div&gt; and &lt;p&gt; elements</dd>
			<dt>div > p</dt>
			<dd>Selects all &lt;p&gt; elements with a parent of &lt;div&gt;</dd>
			<dt>div + p</dt>
			<dd>Selects all &lt;p&gt; elements placed immediately after &lt;div&gt; elements</dd>
			<dt>div~ul</dt>
			<dd>Selects all &lt;p&gt; elements preceded by &lt;div&gt; elements</dd>
		</dl>
		<h2>Attributes</h2>
		<dl>
			<dt>[attribute]</dt>
			<dd>Selects all elements with the specified attribute</dd>
			<dt>[attribute=value]</dt>
			<dd>Selects all elements where the specified attribute is equal to ‘value’</dd>
			<dt>[attribute~=value]</dt>
			<dd>Selects all elements with an attribute containing the word ‘value’</dd>
			<dt>[attribute|=value]</dt>
			<dd>Selects all elements with an attribute list starting with ‘value’</dd>
			<dt>[attribute^=value]</dt>
			<dd>Selects all elements with an attribute beginning with ‘value’</dt>
			<dt>[attribute$=value]</dd>
			<dd>Selects all elements with an attribute ending with ‘value’</dd>
			<dt>[attribute*=value]</dt>
			<dd>Selects all elements with an attribute containing the substring ‘value’</dd>
		</dl>
		<h2>Pseudo-classes</h2>
		<dl>
			<dt>a:link</dt>
			<dd>Selects all unvisited links</dd>
			<dt>a:visited</dt>
			<dd>Selects all visited links</dd>
			<dt>a:hover</dt>
			<dd>Selects links on mouse hover</dd>
			<dt>a:active</dt>
			<dd>Selects the active link element</dd>
			<dt>p::after</dt>
			<dd>Insert content after &lt;p&gt; element</dd>
			<dt>p::before</dt>
			<dd>Insert content before &lt;p&gt; element</dd>
			<dt>input:checked</dt>
			<dd>Selects every checked &lt;input&gt; element</dd>
			<dt>input:disabled</dt>
			<dd>Selects every disabled &lt;input&gt; element</dd>
			<dt>p:empty</dt>
			<dd>Selects every &lt;p&gt; element with no children</dd>
			<dt>input:enabled</dt>
			<dd>Selects every enabled &lt;input&gt; element</dd>
			<dt>p:first-child</dt>
			<dd>Selects every &lt;p&gt; element that is the first child of its parent</dd>
			<dt>p::first-letter</dt>
			<dd>Selects the first letter of every &lt;p&gt; element</dd>
			<dt>p::first-line</dt>
			<dd>Selects the first line of every &lt;p&gt; element</dd>
			<dt>p:first-of-type</dt>
			<dd>Selects every &lt;p&gt; element that is the first &lt;p&gt; element of its parent</dd>
			<dt>input:focus</dt>
			<dd>Selects the &lt;input&gt; element which has focus</dd>
			<dt>input:in-range</dt>
			<dd>Selects &lt;input&gt; elements with a value within a specified range</dd>
			<dt>input:invalid</dt>
			<dd>Selects all &lt;input&gt; elements with an invalid value</dd>
			<dt>p:lang(<em>language</em>)</dt>
			<dd>Selects all &lt;p&gt; elements with a lang attribute equal to ‘language’</dd>
			<dt>p:last-child</dt>
			<dd>Selects every &lt;p&gt; element which is the last child of its parent</dd>
			<dt>p:last-of-type</dt>
			<dd>Selects every &lt;p&gt; element which is the last &lt;p&gt; element of its parent</dd>
			<dt>:not(p)</dt>
			<dd>Selects every element that is not a &lt;p&gt;</dd>
			<dt>p:nth-child(2)</dt>
			<dd>Selects every &lt;p&gt; element that is the second child of its parent</dd>
			<dt>p:nth-last-child(2)</dt>
			<dd>Selects every &lt;p&gt; element that is the second child of its parent, counting from the last child</dd>
			<dt>p:nth-last-of-type(2)</dt>
			<dd>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent, counting from the last child</dd>
			<dt>p:nth-of-type(2)</dt>
			<dd>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent</dd>
			<dt>p:only-of-type</dt>
			<dd>Selects every &lt;p&gt; element that is the only &lt;p&gt; element of its parent</dd>
			<dt>p:only-child</dt>
			<dd>Selects every &lt;p&gt; element that is the only child of its parent</dd>
			<dt>input:optional</dt>
			<dd>Selects &lt;input&gt; elements with no ‘required’ attribute</dd>
			<dt>input:out-of-range</dt>
			<dd>Selects &lt;input&gt; elements with a value outside a specified range</dd>
			<dt>input:read-only</dt>
			<dd>Selects &lt;input&gt; elements with the ‘readonly’ attribute specified</dd>
			<dt>input:read-write</dt>
			<dd>Selects &lt;input&gt; elements with the ‘readonly’ attribute not specified</dd>
			<dt>input:required</dt>
			<dd>Selects &lt;input&gt; elements with the ‘required’ attribute specified</dd>
			<dt>:root</dt>
			<dd>Selects the documents root element</dd>
			<dt>::selection</dt>
			<dd>Selects the portion of an element that is selected by a user</dd>
			<dt>#id:target</dt>
			<dd>Selects the current active #id element</dd>
			<dt>input:valid</dt>
			<dd>Selects all &lt;input&gt; elements with a valid value</dd>
		</dl>
	</main>
<?php include 'footer.php'; ?>