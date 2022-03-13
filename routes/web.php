<?php

use Illuminate\Support\Facades\Route;
/*=======================================
========< Regular User Routes >==========
========================================*/

include_once 'user/user.php';


/*===================================
========< Admin Routes >==========
===================================*/

Route::middleware(['auth', 'admin', 'verified'])->group(function(){

    include_once 'admin/admin.php';

});


/*===================================
========< Employee Routes >==========
===================================*/

Route::middleware(['auth', 'employee', 'verified'])->group(function(){

    include_once 'employee/employee.php';

});

/*===================================
========< Employeer Routes >==========
===================================*/

Route::middleware(['auth', 'employeer', 'verified'])->group(function(){

    include_once 'employeer/employeer.php';

});


// /*===================================
// ========< Common Routes >==========
// ===================================*/

// Route::middleware(['auth'])->group(function(){

//     include_once 'common/common.php';

// });


/*===================================
========< Common Routes >==========
===================================*/

Route::middleware(['auth', 'verified'])->group(function(){

    include_once 'common/common.php';

});

/*===================================
========< Auth Routes >==========
===================================*/

    include_once 'auth/auth.php';
