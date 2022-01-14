<?php

use Illuminate\Support\Facades\Route;
use App\Models\addemployee;
use App\Models\designation;
use App\Models\designationname;
use App\Models\account;
use App\Models\holiday;
use App\Models\tax;
use App\Models\company;
use App\Models\role;
use App\Models\User;
use App\Models\dept;
use App\Models\salary;
use App\Models\humanresource;
use App\Models\LeaveRequest;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

########## HR DashBoard Routes Here ##########


Route::group(['middleware'=> 'auth'], function(){

    // Route::get('/dashboard', function(){
    //     return view('hr.dashboard');
    // });
    Route::get('/dashboard', 'App\Http\Controllers\addemployeeController@viewrec');

});

Route::get('/payrollitems', function(){
    return view('hr.payrollitems');
});

Route::get('/holidays', function(){
    return view('hr.holidays');
});


Route::get('/salaryreport', function(){
    return view('hr.salaryreport');
});

Route::get('/newforget', function(){
    return view('hr.newforget');
});
Route::get('/about', function(){
    return view('hr.about');
});

Route::get('/', function(){
    return view('hr.loading');
});



// ---------------------------------------------------------------------
//    EMPLOYEE MODULE
// Route::get('/addemployee',function(){
//     //  $new= dept::all();
//     // dd($new);
//     return view('hr.addemployee');
// });
Route::get('/empdept/{id}', function($id)
{
    $emp= addemployee::find($id);
    dd($emp->dept->dept_name);
});
Route::get('/alldepts', function()
{
    $dep= dept::all();
    dd($dep);
});


Route::get('/addemployee', 'App\Http\Controllers\addemployeeController@index');
//insertion of emp in DB
Route::post('/createemp', 'App\Http\Controllers\addemployeeController@create');
//read data of emp in view emp
Route::get('/allemp', 'App\Http\Controllers\addemployeeController@allemp');
//edit emp record
Route::get('/getrec/{id}', 'App\Http\Controllers\addemployeeController@getrec');
//now updating emp in DB
Route::post('/updateemp', 'App\Http\Controllers\addemployeeController@update');

//----------------------------------------------------------------------------------
//    TERMINATE EMPLOYEE
//----------------------------------------------------------------------------------

//view data of emp of emp to terminate
Route::get('/viewteremp', 'App\Http\Controllers\addemployeeController@viewterminateemp');

//terminate data of emp
Route::get('/teremp/{id}', 'App\Http\Controllers\addemployeeController@terminate');

//view terminated emp only
Route::get('/terview', 'App\Http\Controllers\addemployeeController@terminatedemp');



// ------------------------------------------------------------------------
//    DESIGNATION MODULE
//emp ki id url mai dainge
Route::get('/emp/{id}', function($id)
{
    $emp= addemployee::find($id);
    dd($emp->designation);
});
//designation ki id 
Route::get('/desig/{id}', function($id)
{
    $desig= designation::find($id);
    return($desig->emp->fname);
});

//leave relation

Route::get('/test/{id}', function($id)
{
    $leave= LeaveRequest::find($id);
    return($leave->employee->fname);
});

// Route::get('/findall', function(){

// $posts =designation::all();
// foreach($posts as $post)
// {
//     echo $post."<br>";
// }

// });

// Route::get('/insert', function(){

//    $des= designation::create([
//         'addemployee_id'=> 3,
//         'designation' => 'manager',
//         'basic_pay'=> 333,
//         'travel_allowance'=> 333,
//         'medical_allowance'=> 77777,
//     ]);
//     return "Success";
// });


//  function(){
//     return view('hr.designation');
// });

Route::get('/desigg/{id}', function ($id) {
    $desig=designationname::find($id);
    dd($desig);
});
//data from designation table
Route::get('/d/{id}', function ($id) {
    $desig=designation::find($id);
    dd($desig);
});
//data from designationnames table
Route::get('/new/{id}', function($id){
    $new=designationname::find($id);
    dd($new);
});

// Route::get('/many/{id}',function($id){
//     $dd=designationname::where('designation_names', 'Web Developer');
//     foreach($dd->designationnames as $ss)
//     {
//         return $ss;
//     }
// });

Route::get('/designation','App\Http\Controllers\designationController@index');
//insert
Route::post('/create2', 'App\Http\Controllers\designationController@create');
Route::get('/get_image/{id}', 'App\Http\Controllers\designationController@get_image');

//view records in view designation blade
Route::get('/viewdes', 'App\Http\Controllers\designationController@view');
//dlt rec
// Route::get('/deletedes/{id}','App\Http\Controllers\designationController@dlt');
//edit rec
Route::get('/editdes/{id}','App\Http\Controllers\designationController@edit');
//update rec
Route::post('/updatedes','App\Http\Controllers\designationController@update');
//----------------------------------------------------------------------------------
//add designation names
Route::post('/adddn','App\Http\Controllers\designationnameController@adddn');
//view designation names
Route::get('/adddes','App\Http\Controllers\designationnameController@add');
//delete designation name
Route::get('/deletedn/{id}','App\Http\Controllers\designationnameController@del');
//edit designation name
Route::get('/editddn/{id}','App\Http\Controllers\designationnameController@edit');
//update designation name
Route::post('/updatedn','App\Http\Controllers\designationnameController@update');

//----------------------------------------------------------------------------------
//   ACCOUNT MODULE
//----------------------------------------------------------------------------------
//checking relation
//id of account and fetch data from emp table
Route::get('/a/{id}', function ($id) {
    $acc=account::find($id);
    dd($acc->emp);
});
//id of emp and fetch data from account table
Route::get('/e/{id}', function($id){
    $emp= addemployee::find($id);
    dd($emp->account);
});

//id of dept and fetch data from emp table
// Route::get('/ff/{id}', function($id){
//     $dept= dept::find($id);
//     dd($dept->empdept->fname);
//     // if($dept->empdept->fname==null){
//     //     dd("this dept can be deleted");
//     // }  
//     // else{
//     //     dd("this can't");
//     // }
//});


Route::get('/accounts', function(){
    return view('hr.accounts');
});

//Route::get('/accounts','App\Http\Controllers\accountController@index');
//insert
Route::post('/create','App\Http\Controllers\accountController@create');

Route::get('/get_image/{id}', 'App\Http\Controllers\accountController@get_image');
//viewaccounts
Route::get('/viewaccounts','App\Http\Controllers\accountController@view');
//delete account
// Route::get('/deleteacc/{id}','App\Http\Controllers\accountController@delete');
//edit account
Route::get('/editacc/{id}','App\Http\Controllers\accountController@edit');
//update account
Route::post('/updateacc', 'App\Http\Controllers\accountController@update');



//----------------------------------------------------------------------------------
//   HOLIDAY MODULE
//----------------------------------------------------------------------------------
// insertholiday
Route::post('/insertholiday','App\Http\Controllers\holidayController@insert');
//view holidays
Route::get('/holidays','App\Http\Controllers\holidayController@view');
//delete
Route::get('/deleteholiday/{id}','App\Http\Controllers\holidayController@delete');
//edit
Route::get('/editholiday/{id}', 'App\Http\Controllers\holidayController@edit');
//update
Route::post('/updateholiday', 'App\Http\Controllers\holidayController@update');



//----------------------------------------------------------------------------------
//   TAX MODULE
//----------------------------------------------------------------------------------
//insert
Route::post('/insert', 'App\Http\Controllers\TaxController@insert');
//view
Route::get('/viewtax', 'App\Http\Controllers\TaxController@view');
//edit
Route::get('/edittax/{id}', 'App\Http\Controllers\TaxController@edit');
//update
Route::post('/updatetax', 'App\Http\Controllers\TaxController@update');
//delete
Route::delete('/deletetax', 'App\Http\Controllers\TaxController@delete');



//----------------------------------------------------------------------------------
//   COMPANY SETTING MODULE
//----------------------------------------------------------------------------------
//edit
Route::get('/companysetting', 'App\Http\Controllers\CompanyController@edit');
//update
Route::post('/updatecompany', 'App\Http\Controllers\CompanyController@update');



//----------------------------------------------------------------------------------
//   TESTING RELATION B/W ROLE AND USER
//----------------------------------------------------------------------------------
Route::get('/userrolename', function(){

    $user = User::find(2);
    //dd($user);

    foreach($user->roles as $role)
    {
        echo "user role is ". $role->name;
    }

    //  $role = role::find(2);
    // //dd($role);

    // foreach($role->users as $user)
    // {
    //     echo "role has name ". $user->name;
    // }
    
});



//----------------------------------------------------------------------------------
//   CREATE SALARY
//----------------------------------------------------------------------------------
Route::get('/salary', 'App\Http\Controllers\salarycontroller@salary');
Route::get('/empnames/{dep_id}/{year}/{month}', 'App\Http\Controllers\salarycontroller@get');
Route::get('/proceed/{emp_id}', 'App\Http\Controllers\salarycontroller@proceed');
Route::post('/insertsalary', 'App\Http\Controllers\salarycontroller@finalsalary');
//view salary record
Route::get('/viewsalary', 'App\Http\Controllers\salarycontroller@viewsal');
//delete salary record
Route::get('/deletesalary/{id}', 'App\Http\Controllers\salarycontroller@deletesalary');
//payslip
Route::get('/pdfslip/{id}', 'App\Http\Controllers\salarycontroller@pdfslip');
//download
Route::get('/downloadpdf/{id}', 'App\Http\Controllers\salarycontroller@download');
//view salary report
Route::get('/salaryreport', 'App\Http\Controllers\salarycontroller@viewsalreport');
//view payslip
Route::get('/viewpdfslip/{id}', 'App\Http\Controllers\salarycontroller@viewpdfslip');

//----------------------------------------------------------------------------------
//                            HR PROFILE SETTINGS
//----------------------------------------------------------------------------------
Route::get('/hrprofile', 'App\Http\Controllers\hrprofilecontroller@hrprofile');

//SIDENAV HR DISPLAY
Route::get('/sidenav', 'App\Http\Controllers\hrprofilecontroller@sidenavhr');

//----------------------------------------------------------------------------------
//                             LEAVE REQUEST MODULE
//----------------------------------------------------------------------------------
Route::get('/leaves', 'App\Http\Controllers\leaveRequestController@leaves');
//approve leave rqst
Route::post('/approve/{id}', 'App\Http\Controllers\leaveRequestController@approve');
//reject leave rqst
Route::post('/reject/{id}', 'App\Http\Controllers\leaveRequestController@reject');




        
//----------------------------------------------------------------------------
########## Admin DashBoard Routes Here ##########

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//----------------------------------------------------------------------------------
//   DEPARTMENT MODULE
//----------------------------------------------------------------------------------
        Route::get('/adddept',[App\Http\Controllers\deptController::class,'dept'])->name('admin.adddept');
        //add dept
        Route::post('/dept',[App\Http\Controllers\deptController::class,'adddept'])->name('admin.dept');
        //delete dept
        Route::post('/deletedept',[App\Http\Controllers\deptController::class,'delete'])->name('admin.deletedept');
         //edit dept
        Route::get('/editdept/{id}',[App\Http\Controllers\deptController::class,'editdept']);
        //update dept
        Route::post('/updatedept',[App\Http\Controllers\deptController::class,'updatedept'])->name('admin.updatedept');


//----------------------------------------------------------------------------------
//   ADD HR MODULE
//----------------------------------------------------------------------------------
        Route::get('/addhr',[App\Http\Controllers\HRController::class,'addhrview'])->name('admin.addhr');
        //ADD HR
        Route::post('/createhr',[App\Http\Controllers\HRController::class,'createhr'])->name('admin.createhr');
        //VIEW ALL HR
        Route::get('/viewhr',[App\Http\Controllers\HRController::class,'allhr'])->name('admin.viewhr');
        //delete HR
        Route::get('/deletehr/{id}',[App\Http\Controllers\HRController::class,'deletehr'])->name('admin.deletehr');
        //edit HR
        Route::get('/edithr/{id}',[App\Http\Controllers\HRController::class,'edithr'])->name('admin.edithr');
        //update HR
        Route::post('/updatehr',[App\Http\Controllers\HRController::class,'updatehr'])->name('admin.updatehr');

//----------------------------------------------------------------------------------
//   VIEW ALL EMPLOYEES MODULE
//----------------------------------------------------------------------------------
        Route::get('/viewemp',[App\Http\Controllers\HRController::class,'viewemp'])->name('admin.viewemp');

//----------------------------------------------------------------------------------
//   VIEW SALARY MODULE
//----------------------------------------------------------------------------------     
        Route::get('/viewallsalary',[App\Http\Controllers\HRController::class,'viewsalary'])->name('admin.viewallsalary');

//----------------------------------------------------------------------------------
//   VIEW LEAVES MODULE
//----------------------------------------------------------------------------------     
        Route::get('/viewleaves',[App\Http\Controllers\HRController::class,'viewleaves'])->name('admin.viewleaves');

//----------------------------------------------------------------------------------
//   COMPANY SITE
//----------------------------------------------------------------------------------     
        Route::get('/companysite',[App\Http\Controllers\HRController::class,'viewcompanysite'])->name('admin.companysite');
    });
});




Route::get('/adminsidenav', function(){
    return view('admin.adminsidenav');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dn', function()
{
    $dn= designationname::all();
    dd($dn);
})->name('dno');
