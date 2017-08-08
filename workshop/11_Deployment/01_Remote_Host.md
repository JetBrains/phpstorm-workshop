Remote Host

Copy files and folders back and forth between the local project and the server.
0. Make sure that you've uncommented the line in docker-compose.yml according to your OS
1. Make sure that you've executed "docker-compose up".
This will start SFTP server on the port 2022 for which your local (C:\tmp or /tmp) folder will be mapped to /home/jetbrains/upload
2. Open Settings|Build, Execution, Deployment|Deployment, select vm server and provide password: jetbrains
3. Using _Search Everywhere_, find the _Remote Host_ tool window.
5. Browse the remote host and copy some files from the current project to the remote server.
   This can be done either by dragging and dropping the flies or by using the context menu.