<?php
	$title = "Cheetyr – Git Cheatsheet";
	include 'header.php';
?>
	<main>
		<h1>Git</h1>
		<h2>Getting Started</h2>
		<dl>
			<dt>$ git clone <em>[repository]</em></dt>
			<dd>Clone an existing repository</dd>
			<dt>$ git init</dt>
			<dd>Create a new local respository</dd>
		</dl>
		<h2>Local</h2>
		<dl>
			<dt>$ git status</dt>
			<dd>Show changed files in your working directory</dd>
			<dt>$ git diff</dt>
			<dd>Show changes to tracked files</dd>
			<dt>$ git add .</dt>
			<dd>Add all changes to the next commit</dd>
			<dt>$ git add -p <em>[file]</em></dt>
			<dd>Add changes in <em>[file]</em> to the next commit</dd>
			<dt>$ git commit -a</dt>
			<dd>Commit all local changes in tracked files</dd>
			<dt>$ git commit</dt>
			<dd>Commit previously staged changes</dd>
			<dt>$ git commit --amend</dt>
			<dd>Change the last commit</dd>
			<dt>$ git log</dt>
			<dd>Show all commits, starting with most recent</dd>
			<dt>$ git log -p <em>[file]</em></dt>
			<dd>Show changes over time to <em>[file]</em></dd>
			<dt>$ git blame <em>[file]</em></dt>
			<dd>Show changes for <em>[file]</em> with time and author</dd>
		</dl>
		<h2>Branches &amp; Tags</h2>
		<dl>
			<dt>$ git branch</dt>
			<dd>List all existing branches</dd>
			<dt>$ git checkout <em>[branch]</em></dt>
			<dd>Switch HEAD branch</dd>
			<dt>$ git branch <em>[new branch]</em></dt>
			<dd>Create new branch based on current HEAD</dd>
			<dt>$ git branch --track <em>[new branch]</em> <em>[remote branch]</em></dt>
			<dd>Create new tracking branch based on a remote branch</dd>
			<dt>$ git branch -d <em>[branch]</em></dt>
			<dd>Delete local branch</dd>
			<dt>$ git tag <em>[tag name]</em></dt>
			<dd>Mark the current commit with a tag</dd>
		</dl>
		<h2>Remote</h2>
		<dl>
			<dt>$ git remote -v</dt>
			<dd>List all currently configured remotes</dd>
			<dt>$ git remote show <em>[remote]</em></dt>
			<dd>Display information about <em>[remote]</em></dd>
			<dt>$ git remote add <em>[remote]</em> <em>[url]</em></dt>
			<dd>Add a new remote, named <em>[remote]</em></dd>
			<dt>$ git fetch <em>[remote]</em></dt>
			<dd>Download all changes from <em>[remote]</em>, don't integrate into HEAD</dd>
			<dt>$ git pull <em>[remote]</em> <em>[branch]</em></dt>
			<dd>Download changes and merge to HEAD</dd>
			<dt>$ git push <em>[remote]</em> <em>[branch]</em></dt>
			<dd>Publish local changes</dd>
			<dt>$ git push <em>[remote]</em> :<em>[branch]</em></dt>
			<dd>Delete a branch on the remote</dd>
			<dt>$ git push --tags</dt>
			<dd>Publish tags</dd>
		</dl>
		<h2>Merge &amp; Rebase</h2>
		<dl>
			<dt>$ git merge <em>[branch]</em></dt>
			<dd>Merge <em>[branch]</em> into your current HEAD</dd>
			<dt>$ git rebase <em>[branch]</em></dt>
			<dd>Rebase your HEAD onto <em>[branch]</em></dd>
			<dt>$ git rebase --abort</dt>
			<dd>Abort a rebase</dd>
			<dt>$ git rebase --continue</dt>
			<dd>Continue a rebase after resolving conflicts</dd>
			<dt>$ git mergetool</dt>
			<dd>Use configured merge tool to resolve conflicts</dt>
		</dl>
		<h2>Stash</h2>
		<dl>
			<dt>$ git stash</dt>
			<dd>Temporarily store all modified tracked files</dd>
			<dt>$ git stash pop</dt>
			<dd>Restore most recetly stashed files</dd>
			<dt>$ git stash list</dt>
			<dd>List all stashed changes</dd>
			<dt>$ git stash drop</dt>
			<dd>Discard most recently stashed changeset</dd>
		</dl>
		<h2>Reset &amp; Revert</h2>
		<dl>
			<dt>$ git reset --hard HEAD</dd>
			<dd>Discard all local changes in your working directory</dd>
			<dt>$ git checkout HEAD <em>[file]</em></dt>
			<dd>Discard local changes in <em>[file]</em></dd>
			<dt>$ git revert <em>[commit]</em></dt>
			<dd>Revert a commit</dd>
			<dt>$ git reset --hard <em>[commit]</em></dt>
			<dd>Reset HEAD to a previous commit and discard all changes since</dd>
			<dt>$ git reset <em>[commit]</em></dt>
			<dd>Reset HEAD to a previous commit and preserve all changes as unstaged changes</dd>
			<dt>$ git reset --keep <em>[commit]</em></dt>
			<dd>Reset HEAD to a previous commit and preserve uncommitted local changes</dd>
		</dl>
	</main>
<?php include 'footer.php'; ?>