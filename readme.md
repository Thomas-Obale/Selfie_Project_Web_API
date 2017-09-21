# Instructions

* Create a new directory
* Open Command Line and Clone the source code using 'git clone https://github.com/Thomas-Obale/Selfie_Project_Web_API.git'
* Navigate to the project root directory

## Database Setup

* rename .env.example to .env in the root directory
* Fill in database credentials
* run 'php artisan' to see all avaliable commands
  * run 'php artisan migrate' to create all the database tables

## Setting up the server
* run 'php -S localhost:8000 -t public'

Your server is now running on localhost:8000, you can check this on the browser

Check routes/web.php for all HTTP requests