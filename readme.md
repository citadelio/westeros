
## Setting Up Westeros
This projest is set up using Laravel and Reactjs

Clone this repository, then run


Open another terminal and from the root directory of this project, run
npm install


this will install all the required packages to enable react.

then run npm run dev to start the react application.

to start the laravel server

create a database (I used mysql) and link to it in the .env file.

then run 
php artisan migrate. to do the migration and create the necessary tables.

run php artisan serve --port 8080 to start the app on port 8080

Navigate to localhost:8080 on a browser to view the application.