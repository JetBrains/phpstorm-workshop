# Git/Mercurial: Push/Pull

Persist local copy of VCS repository to remote copy.

1. Let's setup a VCS "server" using Git. Using Tools | Open Terminal..., navigate to a temporary folder on your computer.
   In that folder, create a new folder (name does not matter, just remember it).
   Open the newly created folder and run: `git init`
   This will make the folder a Git repository we can work with in further exercises.
2. We want to push our local copy of the VCS to this "server". First, we need to add a "remote".
   Using Tools | Open Terminal..., make sure we are in the current project's directory.
   Enter the command: `git remote add origin <path we created in step 1>`
   For example: `git remote add origin C:\Temp\repository`
3. Push changes to the remote repository using the VCS Operations popup. Since we haven't pushed before, the IDE shows that all changelists will be pushed.

When working with Git/Mercurial, make sure to periodically push to a different repository, for example to [www.github.com](www.github.com).
   This will provide you with an off-computer copy of the entire code history.
