

## How to run

1. Clone the repository
2. Run `composer install` (if you don't have composer installed, you can download it from [here](https://getcomposer.org/download/)
3. laravel uses .env file for environment variables, you can copy the .env.example file and rename it to .env
4. Run `touch database/database.sqlite` or on Windows just click create new file inside database and name the file database.sqlite to create the database file ( make sure that terminal is in the root directory of the project) This is assuming you will use sqlite, if not can ignore this step
5. Run `php artisan migrate` to create the database tables
6. To populate with some data, first run `php artisan tinker` and then run `\App\Models\Department::factory()->count(3)->create()` to create the departments
7. Then run `\App\Models\User::factory()->count(5)->create()` to create the users
8. To run the server, run `php artisan serve` and go to the url provided in the terminal

## Routes
- /api/users/ - GET - to get all users
- /api/users/{id} - GET - to get a user by id
- /api/users/ - POST - to create a user
- /api/users/{id} - PUT/PATCH - to update a user by id
- /api/users/{id} - DELETE - to delete a user by id

In case routes is not registered, run `php artisan route:clear` and then `php artisan optimize`

Thank you.
