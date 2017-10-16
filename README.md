# Assignment 05 - Points **145**

## Instructions

This assignment contains code from `Assignment 04` so do not be surprised. It picks up where `Assignment 04` left off.  In this assignment you will be learning
about using the Eloquent database package for connecting to MySQL databases.  You will also be learning about [database migrations](https://en.wikipedia.org/wiki/Data_migration#Database_migration)
and how to use the dependency injection container with data storage options.

### 00 - Create a MySQL Database on your DEV box

- Execute these commands on your DEV box:
    - `sudo apt install mysql-server`
    - `sudo service mysqld restart`
- If you are on DigitalOcean you can follow this [tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-14-04).

### 01 - Perform database migrations

- We will be using `phinx` to handle our migrations.  Read about it [here](https://phinx.org).
- Updated the `phinx.yml` file with your database connection information.
- Change directory to `./db/`.
- Execute these commands after running `composer install`:
    - `vendor/bin/phinx seed:run -s UsersSeeder` to seed the database with test data.
    - `vendor/bin/phinx seed:run -s UsersTruncator` to remove test data from database.

### 02 - Make Settings, Routing and Dependency Modifications

- Add database connection information to `settings.php` file.
- Modify `routes.php` file to contain only **2** routes `/` and `/profile`.
- Add the new actions to the dependency injection container.

### 03 - Adjust Twig Templates

- Modify the Twig templates in the `templates/` directory, if needed.

