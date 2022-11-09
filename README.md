1. Clone This Project

2. Run npm install

3. set up database Env 

4. go to config/database put and change to this
    - 'default' => env('DB_CONNECTION', 'mongodb'),
    -  'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'options' => [],
        ],

5. run composer require jenssegers/mongodb
6. install laravel/ui
7. set up scaffholding php artisan ui bootstrap --auth
8. npm install && npm run dev
9. php artisan migrate
10. php artisan serve

![image](https://user-images.githubusercontent.com/29312607/200955449-2d03cb84-9c22-4bb4-8663-191bf2db2f78.png)
![image](https://user-images.githubusercontent.com/29312607/200955541-c049cde5-c5da-44be-8a9d-9f979d7e2c94.png)
![image](https://user-images.githubusercontent.com/29312607/200955595-a648810d-84b4-46c0-b8a7-6677c278ed6e.png)
![image](https://user-images.githubusercontent.com/29312607/200955734-346f7cf1-f6e7-4932-b819-b3a1b4ef72fd.png)
![image](https://user-images.githubusercontent.com/29312607/200955799-11299766-025f-4ba2-bc8f-0da4fab1332c.png)
![image](https://user-images.githubusercontent.com/29312607/200955878-43ce726d-c018-4823-aa99-e9223ceefdc5.png)
![image](https://user-images.githubusercontent.com/29312607/200955940-b517e5ae-8b6f-4abb-b486-fa1606872994.png)
![image](https://user-images.githubusercontent.com/29312607/200956000-0782d659-20eb-43aa-b76f-999faa20b34f.png)
![image](https://user-images.githubusercontent.com/29312607/200956058-0dba2ff1-679e-425c-b053-06d697129d31.png)




