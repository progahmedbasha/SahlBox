Steps to run the project : 
1- git clone the project .
2- copy env.example and rename it to .env .
3- set database configration in .env
4- run composer install .
5- run npm install .
6- run npm run build .
7- run php artisan migrate:fresh --seed .
8- run php artisan serve to get ip for project .
9- to access panel use this configration :
    url : http://127.0.0.1:8000/login
    email : admin@gmail.com
    password : 12345678
