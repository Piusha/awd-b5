# Working with PHP and mysql

Import Mysql data from the external sql file

    $ mysql -u username -p database_name < file.sql


## Employee Example

Application Architecture

    Mysql -> Mode   -> EmployeeModel
                    -> DepartmentModel
                    -> UserMode
                    -> ....Model


Created Mysql and Model as abstract class where it can only extend from the chile class. 