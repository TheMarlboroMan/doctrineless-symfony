doctrineless-symfony
====================

A repo-tutorial to see how we can do database work in symfony without doctrine and with PDO. 

THIS IS STILL A WORK IN PROGRESS, PLEASE, COME BACK LATER.

# My setup.

I am using a Lubuntu 14 machine, with Xampp 1.8.3-2. That's PHP 5.5.6, Mysql 5.6.14 and Apache 2.4.7.

# Creating the project.

Please, see the instructions in the README.md file of my refresh-symfony repository on github and follow the steps "Creating the project and setting it up." and "Setting it up on GIT...". I assume you are familiar with symfony and MySQL stored procedures. If not, refer to the refresh-symfony repository mentioned earlier.

# The general idea.

//TODO.

# Setting up the database tables and procedures.

//TODO.
//TODO: PROCEDURE SET ERROR MESSAGE... WHAT VERSION OF MYSQL IS THAT?

# Setting up doctrineless symfony.

## Setting up the test controller.

	- remove unused files (defaultcontroller and view directory).
	- routing.
	- new controller.

## Removing doctrine and other bundles we are not going to use.

	- app/AppKernel.php remove from (we removed all but frameworkBundle and AppBundle. We also removed all from dev). 
	- app/config/config.yml, app/config/config_dev.yml, app/config/security.yml can remove too.
	- everything from routing_dev can go to hell too except for the _main entry.
	- set templating engines to php in config.yml
	- update composer files
	- composer update vvv (go have a drink in the meantime).
	- check the vendor directory. Still doctrine, but much less... Most of these aren't going anywhere.

## Testing again.

	- Load the thing again.

# Connecting to the database.

	- A quick controller test.

# Moving the database connection to a service.

//TODO: To connect to database automatically we could hook to events... http://symfony.com/doc/2.8/reference/events.html
//But actually... does that really matter?

# Setting up procedure services.

# Setting up all routes and controllers.

# Final words.
