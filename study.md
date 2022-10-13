#create-project

composer create-project laravel/laravel blog
php artisan serve
http://127.0.0.1:8000

#laravel-command

php artisan make:channel classname         
php artisan make:command classname         
php artisan make:controller classname      
php artisan make:event classname            
php artisan make:exception classname       
php artisan make:factory classname         
php artisan make:job classname             
php artisan make:listener classname        
php artisan make:mail classname            
php artisan make:middleware classname      
php artisan make:migration classname
php artisan migrate
php artisan down
php artisan up       
php artisan make:model classname
php artisan make:model classname -m            
php artisan make:notification classname    
php artisan make:observer classname        
php artisan make:policy classname          
php artisan make:provider classname        
php artisan make:request classname         
php artisan make:resource classname   or  php artisan make:controller classname --resource    
php artisan make:rule classname            
php artisan make:seeder classname          
php artisan make:test classname

php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan config:clear
php artisan config:cache


#github-project

composer update
.env
php artisan key:generate
php artisan migrate --seed
npm install (delete composer lock if not installed)
npm run dev

#breeze
composer require laravel/breeze --dev

php artisan breeze:install
php artisan migrate
npm install
npm run dev

#migration

column Creation
$table->bigIncrements('id');
$table->bigInteger('votes');
$table->boolean('confirmed');
$table->date('created_at');
$table->dateTime('created_at');
$table->time('sunrise');
$table->json('options');
$table->string('name', 100);
$table->text('description');
$table->longText('description');
$table->timestamps();
$table->year('birth_year');

$table->binary('data');
$table->char('name', 100);
$table->dateTimeTz('created_at');
$table->increments('id');
$table->integer('votes');
$table->ipAddress('visitor');
$table->macAddress('device');
$table->mediumInteger('votes');
$table->mediumText('description');
$table->smallInteger('votes');
$table->smallIncrements('id');


column modifiers | *dependency:(composer require doctrine/dbal)
$table->string('name', 50)->change();
$table->renameColumn('from', 'to');
$table->dropColumn('votes');
$table->dropColumn(['votes', 'avatar', 'location']);
$table->string('email')->nullable();

modifying table 
Schema::rename($from, $to);
Schema::drop('users');
Schema::dropIfExists('users');

Rolling Back Migrations
php artisan migrate:rollback
php artisan migrate:rollback --step=2
php artisan migrate:reset
php artisan migrate:refresh
php artisan migrate:refresh --step=3

#seeder | composer dump-autoload
php artisan make:seeder UsersSeeder
php artisan make:seeder AdminSeeder
php artisan db:seed
php artisan db:seed --class=UsersSeeder
php artisan db:seed --class=AdminSeeder

#Laravel Http Client

use Illuminate\Support\Facades\Http;
 
$response = Http::get('http://example.com');

Illuminate\Http\Client\Response

$response->body() : string;
$response->json($key = null) : array|mixed;
$response->object() : object;
$response->collect($key = null) : Illuminate\Support\Collection;
$response->status() : int;
$response->ok() : bool;
$response->successful() : bool;
$response->redirect(): bool;
$response->failed() : bool;
$response->serverError() : bool;
$response->clientError() : bool;
$response->header($header) : string;
$response->headers() : array;

https://jsonplaceholder.typicode.com/