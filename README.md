codingassignment
================

Coding Assignment


Database Restoration
====================
To restore the database import the mysql dump file named "contact_hours.sql" found in the root directory of the git repository.

Database Configuration
======================
The applications database connection parameters require  the root account to not have any password. If the root account has a password in your mysql instance, change the password valid for field found in /application/config/database.php in line 53.

Web Server Configuration
========================
In the web server, create a virtual host entry for contacts.com pointing the DocumentRoot to the location of the files in your server. The root directory for the entry should be pointing to the directory of where the application, media and system directory resides. mod_rewrite should be installed and enabled in order for the application to run properly for URL re-writing is being utilized by the framework used.