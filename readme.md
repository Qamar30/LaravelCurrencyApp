#  Currency Application
A web application that allow a user to purchase foreign currencies, using Laravel.
# Summary:
The app display the available currencies for selection by the user and has inputs where that user can enter the amount of foreign currency they wish to purchase or the amount of ZAR currency they wish to pay.
Once the user has entered either amount and selected the foreign currency the necessary calculation needs to be done that will display the amount they need to pay in ZAR.
The user can select to "purchase" the foreign currency, an "order" for the currency must be saved to the database and the user must be shown a confirmation.
# Requirements
- Apache Server, online host or local (XAMPP / WAMP / MAMP / LAMP)
- PHP Version 5.4. or greater
- MySQL Database Driver/PHPMYADMIN
- Composer (Dependency Manager for PHP) to manage dependencies in case of need (https://getcomposer.org/doc/00-intro.md)
- Laravel installed via Composer


## Installation
- Download the source package as a zip format, extract the web files and put all into the server root.
- Change the configuration of the database (host credentials and database name) from the .env file in laravel e.g 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Your database name
DB_USERNAME=root
DB_PASSWORD= leave blank if not password enabled on database
- Use the sql file included (shopping_car.sql) to import the database using MySQL command tools or phpmyadmin interface  and set the server root to be pointed to the app main page  (localhost/products)

The SMTP authentication configuration must be configured in order to send an email notification concerning an order set, providing an admin email, host, username, password and port, that can be configured from the .env file e.g MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME= xxxxxx
MAIL_PASSWORD= xxxxx
MAIL_ENCRYPTION=null

- Here is a link to a guide for setting up email configuaration with larvel https://www.5balloons.info/laravel-send-email-example/

## NB
- Remember to set up your database first on laravel and phpymyadmin before running 
# Running the application
-  In the terminal or cmd  window  run php artisan serve in the directory where the application is located, you will be directed  to the following link http://127.0.0.1:8000 on your local drive
- After signing up go to http://127.0.0.1:8000/products to see the shopping cart

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
