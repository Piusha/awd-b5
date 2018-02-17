
# Git Basics

## initialize git

	$ git init

## Check the current branch status

	$ git status


## Add files to the git

	$ git add <file name>

## Track the files (Commit)

Do the changes on new branch  and commit
	$ git commit -a / -am "Description"

## Create new branches

In defualt git will create master branch. Inorder to create branch you can use following command
	
	$ git checkout -b <branch Name>
	$ git status



## Check branches in your local git repo

	$ git branch

## Switch between branches

Switch between local branches

	$ git checkout <branch name>

## To Merge two branches

Merge brach to another branch

	$ git merge <branch name>



## Add remote URL to the local git repo and push branch

Once you want to add remote URL on to your local repository you can use following command

	$ git remote add origin <URL>
	$ git push origin <branch name>




