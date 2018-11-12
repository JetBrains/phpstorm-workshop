# Changelists

Work on multiple logical changes at the same time.

> * Alt+9 (Windows/Linux)
> * Command+9 (macOS)

1. Make some changes to an arbitrary file in the project.
2. Using the keyboard shortcut, open the Version Control view. Make sure you are on the Local Changes tab.
   The change made earlier should be displayed under the Default changelist.
3. Your boss runs in and asks to hotfix a little bug! From the changes tool window, create a new changelist.
   This can be done from the toolbar. The changelist can be given a different name.
   Set the new changelist as the active changelist.
4. Make some changes to a different file. In the changes tool window, note the change is correlated to the newly created changelist.
5. Commit the current changelist to the VCS. The Commit Changes window will have the commit message filled with the name of the changelist.
   After committing, we can switch back to the original changelist and remove the one we just committed to the VCS.