To execute project follow the next steps

1. Create a database
2. Modify the next values at .env to configure database

- database.default.hostname
- database.default.database
- database.default.username
- database.default.password
- database.default.port

3. On the terminal execute php spark shield:setup
In this step the terminal will ask to overwrite some files, you can choose yes (y) or no (no) both options are good
The last question the terminal will ask you if you want to run the command 'spark migrate --all' here the option to be selected is 'y' for yes

4. On the terminal execute php spark migrate

5. And finally to run the project execute php spark serve


