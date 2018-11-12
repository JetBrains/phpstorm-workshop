# Committing Changes

Committing a changelist is persisting it as a logical operation in the VCS, with a comment, author, etc.

> Ctrl+K (Windows/Linux)
>
> Command+K (macOS)

1. Commit the current changelist to the Git repository using Commit Changes.
2. The list on top shows changed, added and deleted files.
   Set the commit message to something describing the logical change.
   In this case this can be "Initial commit" but for a typical change to the code base it would be a bug or issue
   number and a short description.
   Note that the IDE can automatically reformat code, optimize imports and warn us about open TODO comments in code.
   We can also upload changes to a remote server once they are committed.
3. Commit the change.
4. The Project tool window will now show files in a neutral color, meaning they are unchanged and in the VCS.
5. Start typing in the current file (enter your name here: ""). Note that the editor shows a blue color
   in the left gutter, denoting a change in the line of code since the last VCS commit.
   In the Project tool window, the file color also changes to denote the file has been changed.
6. Add a line of text below. Note that the editor now displays green in the left gutter, meaning the line has been added.
7. Commit all changes again and give the commit a descriptive name.
