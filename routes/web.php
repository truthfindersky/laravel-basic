<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewController;

//1. Basic Routing
Route::get('/', function () {
    return view('home');
});

//2. Return string from route 
Route::get('/string', function () {
    return 'Hello String';
});

//3. Return about page no controller
Route::get('/about', function () {
    return view('about');
});

//4. Basic Routing With Controller returning string	
Route::get('/service', [NewController::class, 'Service']);


//5. Basic Routing With Controller returning view
Route::get('/contact', [NewController::class, 'Contact']);

//6. Routing With Parameter
//http://127.0.0.1:8000/name/Mamun
Route::get('/name/{namevalue}', [NewController::class, 'MyName']); 

//7. Routing With Multipul Parameter, return string
//http://127.0.0.1:8000/name/Abdulah/Al/Mamun
Route::get('/name/{firstName}/{middleName}/{lastName}',[NewController::class, 'FName']); 

//8. Route Parameter Controller, return page
//http://127.0.0.1:8000/hello/Abdullah/Al/Mamun
Route::get('/hello/{firstName}/{middleName}/{lastName}',[NewController::class, 'FullName']); 

//9. Single Action Controller, only work with one method
Route::get('/singleaction', NewController::class);

//10. Pass And Display Data In Blade View
Route::get('/datapass', [NewController::class, 'MyBlade']); 

//11. Passing data to blade from route
//*passing data to a page from two different routes creates error!?
Route::get('/about', function () {
    return view('about', ['name' => 'Moana']);
});

//12. Route Parameter Controller, return string
Route::group(['prefix'=>'account'], function(){
    Route::get('/profile', function(){
    return "profile";
    });
    Route::get('/login', function(){
    return "login";
    });
    Route::get('/logout', function(){
    return "logout";
    });
});

//13. Resource Controller
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

//14. foreach loop
use App\Http\Controllers\foreachController;
Route::get('/foreach', [foreachController::class, 'Foreach']);

//15. forelse loop
use App\Http\Controllers\forelseController;
Route::get('/forelse', [forelseController::class, 'Forelse']);

//16. ifelse 
use App\Http\Controllers\IfelseController;
Route::get('/ifelse', [ifelseController::class, 'Ifelse']);

//17. loop
use App\Http\Controllers\LoopController;
Route::get('/loop', [LoopController::class, 'LoopBlade']);

//18. php inside blade view
Route::get('/php', function () {
    return view('php');
});

//19. Template Inheritance Master layout
use App\Http\Controllers\PageController;
Route::get('/page', [PageController::class, 'MyPage']);

//20. Template Inheritance Master layout 
//{{ asset('') }}
//{{ url('') }}
Route::get('/pages', function () {
    return view('pages');
});




//21. Migration (connect db to env, create class, migrate)





//22. Laravel Raw SQL Queries | Basic CURD Operation
use App\Http\Controllers\SQLController;
Route::get('/sqlselectall', [SQLController::class, 'SelectAll']); 


Route::get('/sqlselect', [SQLController::class, 'Select']); 


Route::get('/sqlinsert', function () {
    return view('sqlinsert');
});
Route::post('/sqlinsertData', [SQLController::class, 'Insert']);


Route::get('/sqldelete', function () {
    return view('sqldelete');
});
Route::post('/sqldeleteData', [SQLController::class, 'Delete']);


Route::get('/sqlupdate', function () {
    return view('sqlupdate');
});
Route::post('/sqlupdateData', [SQLController::class, 'Update']);






//23. Laravel Query Builder
use App\Http\Controllers\QueryController;

//Retrieving 
Route::get('/retrieve', [QueryController::class, 'selectAllRows']);
Route::get('/retrieveonerow', [QueryController::class, 'selectOneRow']);
Route::get('/findrow', [QueryController::class, 'findRow']);
Route::get('/onecolumn', [QueryController::class, 'OneColumn']);
Route::get('/multiplecolumn', [QueryController::class, 'MultipleColumn']);
Route::get('/specificdata', [QueryController::class, 'specificData']);

//Aggregates
Route::get('/countrow', [QueryController::class, 'countRow']);
Route::get('/maxrow', [QueryController::class, 'maxRow']);
Route::get('/minrow', [QueryController::class, 'minRow']);
Route::get('/avgrow', [QueryController::class, 'avgRow']);

//Select
Route::get('/queryallselects', [QueryController::class, 'allSelects']);
Route::get('/singlecolumnselect', [QueryController::class, 'SingleColumnSelect']);
Route::get('/multiplecolumnselect', [QueryController::class, 'MultipleColumnSelect']);
//Merge
Route::get('/merge', [QueryController::class, 'mergeData']);
//Join
Route::get('/leftjoin', [QueryController::class, 'LeftJoinData']);
Route::get('/rightjoin', [QueryController::class, 'rightJoinData']);
//insert
Route::get('/queryinsert', [QueryController::class, 'insertRow']);
//delete
Route::get('/querydelete', [QueryController::class, 'onDelete']);
//update
Route::get('/queryupdate', [QueryController::class, 'onUpdate']);







//24. Eloquent ORM/Model
use App\Http\Controllers\studentsController;
Route::get('/allselect', [studentsController::class, 'allSelect']);
Route::get('/singlerow', [studentsController::class, 'singleRow']);
Route::get('/findvalue', [studentsController::class, 'findValue']);
Route::get('/columnvalue', [studentsController::class, 'columnValue']);
Route::get('/onecolumnvalue', [studentsController::class, 'onecolumnValue']);
Route::get('/multiplecolumnvalue', [studentsController::class, 'multicolumnValue']);
Route::get('/countrow', [studentsController::class, 'countRow']);
Route::get('/findmax', [studentsController::class, 'findMax']);
Route::get('/findmin', [studentsController::class, 'findMin']);
Route::get('/findavg', [studentsController::class, 'findAvg']);
Route::get('/insertdatabmodel', [studentsController::class, 'insertDataByModel']);


//25. database seeder - insert dummy data
//composer dump-autoload
//php artisan make:migration Users
//php artisan migrate
//php artisan make:model Users
//php artisan make:seeder UsersSeeder
//DatabaseSeeder.php
//php artisan db:seed --class=UsersSeeder

//26. Laravel Http Client - https://jsonplaceholder.typicode.com/

use App\Http\Controllers\HttpController;
Route::get('/posts', [HttpController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [HttpController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [HttpController::class, 'addPost'])->name('posts.addpost');
Route::get('/update-post', [HttpController::class, 'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}', [HttpController::class, 'deletePost'])->name('posts.deletepost');

//27. Laravel Http Client, Laravel REST API | Lumen & Postman