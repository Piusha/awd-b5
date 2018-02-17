
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


## Clone repo from the remote 

If you want to clone new project on to your local you can use following command


	$ git clone <remote repo url> /local/location/

if you want to clone specific branch 

	$ git clone -b <branch name> <remote repo url> /local/location/



## Get remote branches on to your local 

If you want to fetch origins branch on to your local you can use

 	$ git fetch origin <branch Name>
 	$ git checkout <branch name>


If you want to fetch all the branches that are in remote repo

	$ git fetch origin 

if you list branches you will see all the remote branches are in your local repo

	$ git branch

## Get Remote changes to the local 

If there is any modification on the remote branch and if you want to update your local repo with those changes, then you hvae to pull the changes

	$ git pull origin <branch_name>


