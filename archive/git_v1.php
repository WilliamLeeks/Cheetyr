<?php
	$title = "Cheetyr – Git Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>Git</h1>
		<input id="search-sheet" placeholder="Type to filter sheet">
		<h2>Getting Started</h2>
		<ul class="command-list">
			<li><p>$ git clone <em>[repository]</em></p>
			<p>Clone an existing repository</p></li>
			<li><p>$ git init</p>
			<p>Create a new local respository</p></li>
		</ul>
		<h2>Local</h2>
		<ul class="command-list">
			<li><p>$ git status</p>
			<p>Show changed files in your working directory</p></li>
			<li><p>$ git diff</p>
			<p>Show changes to tracked files</p></li>
			<li><p>$ git add .</p>
			<p>Add all changes to the next commit</p></li>
			<li><p>$ git add -p <em>[file]</em></p>
			<p>Add changes in <em>[file]</em> to the next commit</p></li>
			<li><p>$ git commit -a</p>
			<p>Commit all local changes in tracked files</p></li>
			<li><p>$ git commit</p>
			<p>Commit previously staged changes</p></li>
			<li><p>$ git commit --amend</p>
			<p>Change the last commit</p></li>
			<li><p>$ git log</p>
			<p>Show all commits, starting with most recent</p></li>
			<li><p>$ git log -p <em>[file]</em></p>
			<p>Show changes over time to <em>[file]</em></p></li>
			<li><p>$ git blame <em>[file]</em></p>
			<p>Show changes for <em>[file]</em> with time and author</p></li>
		</ul>
		<h2>Branches &amp; Tags</h2>
		<ul class="command-list">
			<li><p>$ git branch</p>
			<p>List local branches</p></li>
			<li><p>$ git branch -a</p>
			<p>List both local and remote branches</p></li>
			<li><p>$ git branch -r</p>
			<p>List remote branches</p></li>
			<li><p>$ git checkout <em>[branch]</em></p>
			<p>Switch HEAD branch</p></li>
			<li><p>$ git branch <em>[new branch]</em></p>
			<p>Create new branch based on current HEAD</p></li>
			<li><p>$ git branch --track <em>[new branch]</em> <em>[remote branch]</em></p>
			<p>Create new tracking branch based on a remote branch</p></li>
			<li><p>$ git branch -d <em>[branch]</em></p>
			<p>Delete local branch</p></li>
			<li><p>$ git tag <em>[tag name]</em></p>
			<p>Mark the current commit with a tag</p></li>
		</ul>
		<h2>Remote</h2>
		<ul class="command-list">
			<li><p>$ git remote update</p>
			<p>Refresh list of remotes</p></li>
			<li><p>$ git remote -v</p>
			<p>List all currently configured remotes</p></li>
			<li><p>$ git remote show <em>[remote]</em></p>
			<p>Display information about <em>[remote]</em></p></li>
			<li><p>$ git remote add <em>[remote]</em> <em>[url]</em></p>
			<p>Add a new remote, named <em>[remote]</em></p></li>
			<li><p>$ git fetch <em>[remote]</em></p>
			<p>Download all changes from <em>[remote]</em>, don't integrate into HEAD</p></li>
			<li><p>$ git pull <em>[remote]</em> <em>[branch]</em></p>
			<p>Download changes and merge to HEAD</p></li>
			<li><p>$ git push <em>[remote]</em> <em>[branch]</em></p>
			<p>Publish local changes</p></li>
			<li><p>$ git push <em>[remote]</em> :<em>[branch]</em></p>
			<p>Delete a branch on the remote</p></li>
			<li><p>$ git push --tags</p>
			<p>Publish tags</p></li>
		</ul>
		<h2>Merge &amp; Rebase</h2>
		<ul class="command-list">
			<li><p>$ git merge <em>[branch]</em></p>
			<p>Merge <em>[branch]</em> into your current HEAD</p></li>
			<li><p>$ git rebase <em>[branch]</em></p>
			<p>Rebase your HEAD onto <em>[branch]</em></p></li>
			<li><p>$ git rebase --abort</p>
			<p>Abort a rebase</p></li>
			<li><p>$ git rebase --continue</p>
			<p>Continue a rebase after resolving conflicts</p></li>
			<li><p>$ git mergetool</p>
			<p>Use configured merge tool to resolve conflicts</p>
		</ul>
		<h2>Stash</h2>
		<ul class="command-list">
			<li><p>$ git stash</p>
			<p>Temporarily store all modified tracked files</p></li>
			<li><p>$ git stash pop</p>
			<p>Restore most recently stashed files</p></li>
			<li><p>$ git stash list</p>
			<p>List all stashed changes</p></li>
			<li><p>$ git stash drop</p>
			<p>Discard most recently stashed changeset</p></li>
		</ul>
		<h2>Reset &amp; Revert</h2>
		<ul class="command-list">
			<li><p>$ git reset --hard HEAD</p>
			<p>Discard all local changes in your working directory</p></li>
			<li><p>$ git checkout HEAD <em>[file]</em></p>
			<p>Discard local changes in <em>[file]</em></p></li>
			<li><p>$ git revert <em>[commit]</em></p>
			<p>Revert a commit</p></li>
			<li><p>$ git reset --hard <em>[commit]</em></p>
			<p>Reset HEAD to a previous commit and discard all changes since</p></li>
			<li><p>$ git reset <em>[commit]</em></p>
			<p>Reset HEAD to a previous commit and preserve all changes as unstaged changes</p></li>
			<li><p>$ git reset --keep <em>[commit]</em></p>
			<p>Reset HEAD to a previous commit and preserve uncommitted local changes</p></li>
		</ul>
	</main>
<?php include 'footer.php'; ?>