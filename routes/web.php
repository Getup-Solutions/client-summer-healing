<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminpageController;
use App\Http\Controllers\AdminsubscriptionController;
use App\Http\Controllers\AdmingeneralsettingController;
use App\Http\Controllers\AdminpaymentsettingController;
use App\Http\Controllers\AdmincontactsettingController;
use App\Http\Controllers\AdmincourseController;
use App\Http\Controllers\AdminusersettingController;
use App\Http\Controllers\AdmincoursecatController;
use App\Http\Controllers\AdminsubscriberController;
use App\Http\Controllers\AdmintrainerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserdashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminreportController;
use App\Http\Controllers\AdmintransactionController;
use App\Http\Controllers\AdminorderController;
use App\Http\Controllers\AdmincommonController;
use App\Http\Controllers\AdmineventController;
use App\Http\Controllers\AdminondemandcatController;
use App\Http\Controllers\AdminondemandController;
use App\Http\Controllers\AdminscheduleController;
use App\Http\Controllers\AdmintrainingController;
use App\Http\Controllers\AdminwellnessController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SchedulebookingController;
use App\Models\Schedulebooking;
use Illuminate\Support\Facades\Artisan;

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


//FRONTEND PAGES
Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('page.home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('page.about');
Route::get('/subscription-plans', [App\Http\Controllers\PageController::class, 'subscriptionplans'])->name('page.subscriptionplans');
Route::get('/yoga-courses', [App\Http\Controllers\PageController::class, 'yogacourses'])->name('page.yogacourses');
Route::get('/course/{slug}', [App\Http\Controllers\PageController::class, 'yogacoursedetailed'])->name('page.yogacourse.detail');
Route::get('/trainings', [App\Http\Controllers\PageController::class, 'trainings'])->name('page.trainings');
Route::post('/contact', [App\Http\Controllers\PageController::class, 'contactForm'])->name('page.contact.send');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('page.contact');



Route::get('/checkout', [App\Http\Controllers\PageController::class, 'checkout'])->name('page.checkout');
Route::get('/terms', [App\Http\Controllers\PageController::class, 'terms'])->name('page.terms');
Route::get('/refund-policy', [App\Http\Controllers\PageController::class, 'refund'])->name('page.refund');
Route::get('/privacy-policy', [App\Http\Controllers\PageController::class, 'privacy'])->name('page.privacy');
Route::get('/wellness-center', [App\Http\Controllers\PageController::class, 'wellnesscenter'])->name('page.wellnesscenter');
Route::get('/wellness-center/{id}', [App\Http\Controllers\PageController::class, 'wellnesscenter'])->name('page.get.wellnesscenter');
Route::post('/wellness-center', [App\Http\Controllers\PageController::class, 'wellnesscenter'])->name('page.store.wellnesscenter');

// Route::get('/ondemand/{slug}', [App\Http\Controllers\PageController::class, 'yogaondemanddetailed'])->name('page.yogaondemand.detail');


//CART SYSTEM
Route::get('cart', [PageController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PageController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PageController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PageController::class, 'remove'])->name('remove.from.cart');


// CHECKOUT SYSTEM
Route::get('checkout', [PageController::class, 'checkoutCourse'])->name('page.checkout');

Route::post('post-login', [PageController::class, 'postLogin'])->name('page.login.post'); 
Route::post('post-register', [PageController::class, 'postRegister'])->name('page.register.post'); 

//USER ORDERS
Route::post('confirm-order', [OrderController::class, 'confirmOrder'])->name('page.confirm-order'); 
Route::get('success-order', [OrderController::class, 'successOrder'])->name('page.success-order'); 


//USER SUBSCRIPTIONS
Route::get('/subscription/{id}', [App\Http\Controllers\PageController::class, 'subscription'])->name('page.subscription');
Route::post('subscription-login', [PageController::class, 'subscriptionLogin'])->name('page.subscription.login'); 
Route::post('subscription-register', [PageController::class, 'subscriptionRegister'])->name('page.subscription.register'); 
Route::post('/subscription/{id}', [App\Http\Controllers\PageController::class, 'subscriptionmake'])->name('page.subscription.send');
Route::get('success-subscription', [PageController::class, 'successSubscription'])->name('page.success-subscription'); 
Route::get('subscription-detailed/{id}', [PageController::class, 'subscriptionDetailed'])->name('page.subscription.detailed'); 


//USER TRAININGS
Route::get('training/{id}', [PageController::class, 'trainingPurchase'])->name('page.training.purchase');
Route::post('training-login', [PageController::class, 'trainingLogin'])->name('page.training.login'); 
Route::post('training-register', [PageController::class, 'trainingRegister'])->name('page.training.register'); 

Route::post('/training/{id}', [PageController::class, 'trainingmake'])->name('page.training.send');
Route::get('success-training', [PageController::class, 'successtraining'])->name('page.success-training'); 
Route::get('training-details/{id}', [PageController::class, 'trainingDetailed'])->name('page.training.detailed');


//WELLNESS CENTERS
Route::get('/wellness-center/book/{id}', [PageController::class, 'wellnessbook'])->name('page.wellness.wellnessbook');
Route::post('/wellness-center/book/{id}', [PageController::class, 'wellnessbooksend'])->name('page.wellness.wellnessbooksend');


//EVENTS
Route::get('/events', [App\Http\Controllers\PageController::class, 'events'])->name('page.events');
Route::post('event-login', [PageController::class, 'eventLogin'])->name('page.event.login'); 
Route::post('event-register', [PageController::class, 'eventRegister'])->name('page.event.register'); 
Route::get('/event/{id}/detailed', [App\Http\Controllers\PageController::class, 'eventinfo'])->name('page.event.detailed');
Route::get('/event/book/{id}', [App\Http\Controllers\PageController::class, 'eventbook'])->name('page.event.book');
Route::post('/event/book/{id}', [App\Http\Controllers\PageController::class, 'eventbooksend'])->name('page.event.booksend');


//SCHEDULES
Route::get('/schedule', [App\Http\Controllers\PageController::class, 'schedules'])->name('page.schedules');
Route::post('schedule-login', [PageController::class, 'scheduleLogin'])->name('page.schedule.login'); 
Route::post('schedule-register', [PageController::class, 'scheduleRegister'])->name('page.schedule.register'); 
Route::get('/schedule/{id}/detailed', [App\Http\Controllers\PageController::class, 'scheduleinfo'])->name('page.schedule.detailed');
Route::get('/schedule/book/{id}', [App\Http\Controllers\PageController::class, 'schedulebook'])->name('page.schedule.book');
Route::post('/schedule/book/{id}', [App\Http\Controllers\PageController::class, 'schedulebooksend'])->name('page.schedule.booksend');
Route::get('/schedule-json', [App\Http\Controllers\PageController::class, 'schedulesjson'])->name('page.schedulesjson');
Route::get('/scheduleitem', [App\Http\Controllers\PageController::class, 'scheduleItem'])->name('page.scheduleItem');
Route::get('/scheduleitemdate', [App\Http\Controllers\PageController::class, 'scheduleitemdate'])->name('page.scheduleitemdate');
















Auth::routes();

//ADMIN AND USER DASHBOARDS CONTROLLER
Route::get('/user/dashboard', [App\Http\Controllers\HomeController::class, 'userDashboard'])->name('user.dashboard');


//USER DASHBOARD
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user/my-account', [App\Http\Controllers\UserdashboardController::class, 'myaccount'])->name('user.myaccount');
    Route::get('/user/course-detail/{id}', [App\Http\Controllers\UserdashboardController::class, 'myaccountcoursedetails'])->name('user.myaccount.coursedetails');

    Route::get('/user/transactions', [App\Http\Controllers\UserdashboardController::class, 'transactions'])->name('user.transactions');

    Route::get('/user/profile/{id}', [App\Http\Controllers\UserdashboardController::class, 'userprofile'])->name('user.myaccount.userprofile');
    Route::put('/user/profile/{id}', [App\Http\Controllers\UserdashboardController::class, 'userprofileupdate'])->name('user.myaccount.userprofileupdate');

    Route::get('/user/profile/{id}/password-update', [App\Http\Controllers\UserdashboardController::class, 'userprofilepasswordpage'])->name('user.myaccount.userprofilepasswordpage');
    Route::put('/user/profile/{id}/password-update', [App\Http\Controllers\UserdashboardController::class, 'userprofilepasswordupdate'])->name('user.myaccount.userprofilepasswordupdate');

    Route::put('/user/logout', [App\Http\Controllers\UserdashboardController::class, 'userlogoutFun'])->name('user.logout');

    Route::get('/user/ondemand-detail/{id}', [App\Http\Controllers\UserdashboardController::class, 'myaccountondemanddetails'])->name('user.myaccount.ondemanddetails');

    Route::get('/user/subscription/{id}/cancel', [UserdashboardController::class, 'usersubscriptioncancel'])->name('user.subscription.cancel');

    Route::get('/user/my-events', [App\Http\Controllers\UserdashboardController::class, 'myevents'])->name('user.myevents');

    Route::get('/user/create-event', [App\Http\Controllers\UserdashboardController::class, 'createevent'])->name('user.createevent');

    Route::post('/user/event/create', [App\Http\Controllers\UserdashboardController::class, 'eventstore'])->name('user.eventstore');

    Route::get('/user/event-edit/{id}', [App\Http\Controllers\UserdashboardController::class, 'editevent'])->name('user.editevent');

    Route::put('/user/event-update/{id}', [App\Http\Controllers\UserdashboardController::class, 'updateevent'])->name('user.updateevent');

    Route::get('/user/event/{id}/details', [App\Http\Controllers\UserdashboardController::class, 'eventdetails'])->name('user.eventdetails');
    
    



});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin.superadmin'])->group(function () {
    
    //DASHABOARD
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');

    //PAGES
    Route::get('/admin/pages/all', [AdminpageController::class, 'index'])->name('admin.dashboard.pages');
    Route::get('/admin/page/create', [AdminpageController::class, 'create'])->name('admin.dashboard.page.create');
    Route::post('/admin/page/save', [AdminpageController::class, 'store'])->name('admin.dashboard.page.store');
    Route::get('/admin/page/{id}/edit', [AdminpageController::class, 'edit'])->name('admin.dashboard.page.edit');
    Route::put('/admin/page/{id}/update', [AdminpageController::class, 'update'])->name('admin.dashboard.page.update');
    Route::delete('/admin/page/{id}/delete', [AdminpageController::class, 'destroy'])->name('admin.dashboard.page.destroy');
    Route::get('/admin/pages/trash', [AdminpageController::class, 'trash'])->name('admin.dashboard.pages.trash');
    Route::delete('/admin/pages/{id}/forceDelete', [AdminpageController::class, 'forceDelete'])->name('admin.dashboard.pages.forceDelete');
    Route::post('/admin/pages/{id}/restore', [AdminpageController::class, 'restore'])->name('admin.dashboard.pages.restore');
    Route::post('/admin/pages/restore-all', [AdminpageController::class, 'restoreAll'])->name('admin.dashboard.pages.restoreAll');

    //SUBSCRIPTION
    Route::get('/admin/subscriptions/all', [AdminsubscriptionController::class, 'index'])->name('admin.dashboard.subscriptions');
    Route::get('/admin/subscription/create', [AdminsubscriptionController::class, 'create'])->name('admin.dashboard.subscription.create');
    Route::post('/admin/subscription/save', [AdminsubscriptionController::class, 'store'])->name('admin.dashboard.subscription.store');
    Route::get('/admin/subscription/{id}/edit', [AdminsubscriptionController::class, 'edit'])->name('admin.dashboard.subscription.edit');
    Route::put('/admin/subscription/{id}/update', [AdminsubscriptionController::class, 'update'])->name('admin.dashboard.subscription.update');
    Route::delete('/admin/subscription/{id}/delete', [AdminsubscriptionController::class, 'destroy'])->name('admin.dashboard.subscription.destroy');

    //GENERAL SETTINGS
    Route::get('/admin/general-settings/{id}', [AdmingeneralsettingController::class, 'edit'])->name('admin.dashboard.generalsettings.index');
    Route::put('/admin/general-settings/{id}/update', [AdmingeneralsettingController::class, 'update'])->name('admin.dashboard.generalsettings.update');

    //PAYMENT SETTINGS
    Route::get('/admin/payment-settings/{id}', [AdminpaymentsettingController::class, 'edit'])->name('admin.dashboard.paymentsettings.index');
    Route::put('/admin/payment-settings/{id}/update', [AdminpaymentsettingController::class, 'update'])->name('admin.dashboard.paymentsettings.update');

    //CONTACT SETTINGS
    Route::get('/admin/contact-settings/{id}', [AdmincontactsettingController::class, 'edit'])->name('admin.dashboard.contactsettings.index');
    Route::put('/admin/contact-settings/{id}/update', [AdmincontactsettingController::class, 'update'])->name('admin.dashboard.contactsettings.update');

    //ADMIN USER SETTINGS
    Route::get('/admin/admin-users', [AdminusersettingController::class, 'index'])->name('admin.dashboard.adminusersettings.index');
    Route::get('/admin/admin-user/create', [AdminusersettingController::class, 'create'])->name('admin.dashboard.adminusersettings.create');
    Route::post('/admin/admin-user/save', [AdminusersettingController::class, 'store'])->name('admin.dashboard.adminusersettings.store');
    Route::get('/admin/admin-user/{id}/edit', [AdminusersettingController::class, 'edit'])->name('admin.dashboard.adminusersettings.edit');
    Route::put('/admin/admin-user/{id}/update', [AdminusersettingController::class, 'update'])->name('admin.dashboard.adminusersettings.update');
    Route::delete('/admin/admin-user/{id}/delete', [AdminusersettingController::class, 'destroy'])->name('admin.dashboard.adminusersettings.destroy');


    //COURSES
    Route::get('/admin/courses/all', [AdmincourseController::class, 'index'])->name('admin.dashboard.courses');
    Route::get('/admin/course/create', [AdmincourseController::class, 'create'])->name('admin.dashboard.courses.create');
    Route::post('/admin/course/save', [AdmincourseController::class, 'store'])->name('admin.dashboard.courses.store');
    Route::get('/admin/course/{id}/edit', [AdmincourseController::class, 'edit'])->name('admin.dashboard.course.edit');
    Route::put('/admin/course/{id}/update', [AdmincourseController::class, 'update'])->name('admin.dashboard.course.update');
    Route::delete('/admin/course/{id}/delete', [AdmincourseController::class, 'destroy'])->name('admin.dashboard.course.destroy');
    Route::post('/admin/course/image-crop-class', [AdmincourseController::class, 'imageCropPost'])->name("imageCropClass");
    Route::get('/admin/course/view/{id}', [AdmincourseController::class, 'view'])->name('admin.dashboard.course.view');
    Route::delete('/admin/courses/bulk-delete', [AdmincourseController::class, 'deleteAll'])->name('admin.dashboard.course.deleteAll');

    //TRAINING
    Route::get('/admin/trainings/all', [AdmintrainingController::class, 'index'])->name('admin.dashboard.trainings');
    Route::get('/admin/trainings/create', [AdmintrainingController::class, 'create'])->name('admin.dashboard.trainings.create');
    Route::post('/admin/trainings/save', [AdmintrainingController::class, 'store'])->name('admin.dashboard.trainings.store');
    Route::get('/admin/training/{id}/edit', [AdmintrainingController::class, 'edit'])->name('admin.dashboard.trainings.edit');
    Route::put('/admin/training/{id}/update', [AdmintrainingController::class, 'update'])->name('admin.dashboard.trainings.update');
    Route::delete('/admin/training/{id}/delete', [AdmintrainingController::class, 'destroy'])->name('admin.dashboard.trainings.destroy');
    Route::post('/admin/training/image-crop-class', [AdmintrainingController::class, 'imageCropPost'])->name("imageCropClass");


    //EVENTS
    Route::get('/admin/events/all', [AdmineventController::class, 'index'])->name('admin.dashboard.events');
    Route::get('/admin/events/booked/all', [AdmineventController::class, 'bookedevents'])->name('admin.dashboard.bookedevents');
    Route::get('/admin/events/create', [AdmineventController::class, 'create'])->name('admin.dashboard.event.create');
    Route::post('/admin/events/save', [AdmineventController::class, 'store'])->name('admin.dashboard.events.store');
    Route::get('/admin/event/{id}/edit', [AdmineventController::class, 'edit'])->name('admin.dashboard.events.edit');
    Route::put('/admin/event/{id}/update', [AdmineventController::class, 'update'])->name('admin.dashboard.events.update');
    Route::delete('/admin/event/{id}/delete', [AdmineventController::class, 'destroy'])->name('admin.dashboard.event.destroy');
    Route::post('/admin/event/image-crop-class', [AdmineventController::class, 'imageCropPost'])->name("imageCropClass");

    Route::get('/admin/booked-events', [AdmineventController::class, 'bookedevents'])->name('page.bookedevents');
    Route::get('/admin/booked-event-view/{id}', [AdmineventController::class, 'bookedeventview'])->name('admin.dashboard.event.view');
    Route::delete('/admin/booked-event/{id}/delete', [AdmineventController::class, 'destroyEvent'])->name('admin.dashboard.bookedevent.destroy');
    Route::get('/admin/export-events',[AdmineventController::class,'exportEvents'])->name('admin.export-events');

    Route::put('/admin/user-event/{id}/approve', [AdmineventController::class, 'eventapprove'])->name('admin.eventapprove');
    

    //ORDERS
    Route::get('/admin/orders/all', [AdminorderController::class, 'index'])->name('admin.dashboard.orders');


    //COURSE CATEGORY
    Route::get('/admin/course-categories/all', [AdmincoursecatController::class, 'index'])->name('admin.dashboard.admincoursecategories');
    Route::get('/admin/course-category/create', [AdmincoursecatController::class, 'create'])->name('admin.dashboard.admincoursecategories.create');
    Route::post('/admin/course-category/save', [AdmincoursecatController::class, 'store'])->name('admin.dashboard.admincoursecategories.store');
    Route::get('/admin/course-category/{id}/edit', [AdmincoursecatController::class, 'edit'])->name('admin.dashboard.admincoursecategories.edit');
    Route::put('/admin/course-category/{id}/update', [AdmincoursecatController::class, 'update'])->name('admin.dashboard.admincoursecategories.update');
    Route::delete('/admin/course-category/{id}/delete', [AdmincoursecatController::class, 'destroy'])->name('admin.dashboard.admincoursecategories.destroy');


    //ON DEMAND
    Route::get('/admin/ondemand/all', [AdminondemandController::class, 'index'])->name('admin.dashboard.ondemand');
    Route::get('/admin/ondemand/create', [AdminondemandController::class, 'create'])->name('admin.dashboard.ondemand.create');
    Route::post('/admin/ondemand/save', [AdminondemandController::class, 'store'])->name('admin.dashboard.ondemand.store');
    Route::get('/admin/ondemand/{id}/edit', [AdminondemandController::class, 'edit'])->name('admin.dashboard.ondemand.edit');
    Route::put('/admin/ondemand/{id}/update', [AdminondemandController::class, 'update'])->name('admin.dashboard.ondemand.update');
    Route::delete('/admin/ondemand/{id}/delete', [AdminondemandController::class, 'destroy'])->name('admin.dashboard.ondemand.destroy');


    //ONDEMAND CATEGORY
    Route::get('/admin/ondemand-categories/all', [AdminondemandcatController::class, 'index'])->name('admin.dashboard.adminondemandcategories');
    Route::get('/admin/ondemand-category/create', [AdminondemandcatController::class, 'create'])->name('admin.dashboard.adminondemandcategories.create');
    Route::post('/admin/ondemand-category/save', [AdminondemandcatController::class, 'store'])->name('admin.dashboard.adminondemandcategories.store');
    Route::get('/admin/ondemand-category/{id}/edit', [AdminondemandcatController::class, 'edit'])->name('admin.dashboard.adminondemandcategories.edit');
    Route::put('/admin/ondemand-category/{id}/update', [AdminondemandcatController::class, 'update'])->name('admin.dashboard.adminondemdandcategories.update');
    Route::delete('/admin/ondemand-category/{id}/delete', [AdminondemandcatController::class, 'destroy'])->name('admin.dashboard.adminondemandcategories.destroy');



    //SUBSCRIBED USERS - SUBSCRIBERS
    Route::get('/admin/subscribers/all', [AdminsubscriberController::class, 'index'])->name('admin.dashboard.subscribers');
    Route::get('/admin/subscriber/create', [AdminsubscriberController::class, 'create'])->name('admin.dashboard.subscriber.create');
    Route::post('/admin/subscriber/save', [AdminsubscriberController::class, 'store'])->name('admin.dashboard.subscriber.store');
    Route::get('/admin/subscriber/{id}/edit', [AdminsubscriberController::class, 'edit'])->name('admin.dashboard.subscriber.edit');
    Route::put('/admin/subscriber/{id}/update', [AdminsubscriberController::class, 'update'])->name('admin.dashboard.subscriber.update');
    Route::delete('/admin/subscriber/{id}/delete', [AdminsubscriberController::class, 'destroy'])->name('admin.dashboard.subscriber.destroy');


    //TRAINERS
    Route::get('/admin/trainers/all', [AdmintrainerController::class, 'index'])->name('admin.dashboard.trainers');
    Route::get('/admin/trainer/create', [AdmintrainerController::class, 'create'])->name('admin.dashboard.trainer.create');
    Route::post('/admin/trainer/save', [AdmintrainerController::class, 'store'])->name('admin.dashboard.trainer.store');
    Route::get('/admin/trainer/{id}/edit', [AdmintrainerController::class, 'edit'])->name('admin.dashboard.trainer.edit');
    Route::put('/admin/trainer/{id}/update', [AdmintrainerController::class, 'update'])->name('admin.dashboard.trainer.update');
    Route::delete('/admin/trainer/{id}/delete', [AdmintrainerController::class, 'destroy'])->name('admin.dashboard.trainer.destroy');
    Route::post('/admin/trainer/image-crop-class', [AdmintrainerController::class, 'imageCropPost'])->name("imageCropClass");



    //REPORTS
    Route::get('/admin/user-reports', [AdminreportController::class, 'userreports'])->name('admin.dashboard.reports');
    // Route::get('/admin/order-reports', [AdmintransactionController::class, 'userorderexports'])->name('admin.dashboard.userorderexports');
    Route::get('/admin/export-users',[AdminreportController::class,'exportUsers'])->name('admin.export-users');
    Route::get('/admin/export-orders',[OrderController::class,'exportOrders'])->name('admin.export-orders');
    
    Route::get('/admin/order-report',[AdminreportController::class,'orderReports'])->name('admin.orderReports');
    Route::get('/admin/order-report-filter',[AdminreportController::class,'orderReportsPost'])->name('admin.orderReportsPost');
    //Route::get('/admin/order-report',[AdminreportController::class,'orderReports'])->name('admin.orderReports');
    Route::post('/admin/order-report-get',[AdminreportController::class,'getOrderReportsByPeriod'])->name('admin.getOrderReportsByPeriod');
    Route::get('/admin/order-report-result',[AdminreportController::class,'orderReportsResults'])->name('admin.orderReportsResults');
    Route::get('/admin/order-report-print-preview',[AdminreportController::class,'orderReportsExports'])->name('admin.orderReportsExports');
    
    
    
    
    
    

    //LEADS
    Route::get('/admin/user-leads', [AdmincommonController::class, 'userleads'])->name('admin.dashboard.userleads');
    Route::delete('admin/user/lead/{id}', [AdmincommonController::class, 'leadDestroy'])->name('admin.dashboard.lead.delete');

    //USERS
    Route::get('/admin/users', [AdmincommonController::class, 'userslist'])->name('admin.dashboard.users');
    Route::get('/admin/user/{id}', [AdmincommonController::class, 'usershow'])->name('admin.dashboard.usershow');


    //ADMIN USER
    Route::get('/admin/admin-users', [AdmincommonController::class, 'adminuserslist'])->name('admin.dashboard.admins');
    Route::get('/admin/admin-user/add', [AdmincommonController::class, 'adminuseradd'])->name('admin.dashboard.admin.add');
    Route::post('/admin/admin-user/store', [AdmincommonController::class, 'adminuserstore'])->name('admin.dashboard.admin.store');
    Route::get('/admin/admin-user/{id}/edit', [AdmincommonController::class, 'adminuseredit'])->name('admin.dashboard.admin.edit');
    Route::put('/admin/admin-user/{id}/update', [AdmincommonController::class, 'adminuserupdate'])->name('admin.dashboard.admin.update');
    Route::delete('/admin/admin-user/{id}/delete', [AdmincommonController::class, 'adminuserdestroy'])->name('admin.dashboard.admin.destroy');

    //ADMIN ROLES
    Route::get('/admin/permissions', [PermissionController::class, 'index'])->name('admin.dashboard.admin.permissions');
    Route::get('/admin/permissions/add', [PermissionController::class, 'add'])->name('admin.dashboard.admin.permission.add');
    Route::post('/admin/permissions/store', [PermissionController::class, 'store'])->name('admin.dashboard.admin.permission.store');
    Route::get('/admin/permissions/{id}/edit', [PermissionController::class, 'edit'])->name('admin.dashboard.admin.permission.edit');
    Route::put('/admin/permissions/{id}/update', [PermissionController::class, 'update'])->name('admin.dashboard.admin.permission.update');
    Route::Delete('/admin/permissions/{id}/delete', [PermissionController::class, 'destroy'])->name('admin.dashboard.admin.permission.destroy');


    //WELLNESS CENTER
    Route::get('/admin/wellness-center', [AdminwellnessController::class, 'index'])->name('admin.dashboard.wellness.index');
    Route::get('/admin/wellness-center/new', [AdminwellnessController::class, 'create'])->name('admin.dashboard.wellness.create');
    Route::post('/admin/wellness-center/new', [AdminwellnessController::class, 'store'])->name("admin.dashboard.wellness.store");
    Route::get('/admin/wellness-center/edit/{id}', [AdminwellnessController::class, 'edit'])->name('admin.dashboard.wellness.edit');
    Route::put('/admin/trainer/{id}/update', [AdminwellnessController::class, 'update'])->name('admin.dashboard.trainer.update');
    Route::delete('/admin/wellness-center/{id}', [AdminwellnessController::class, 'destroy'])->name('admin.dashboard.wellness.delete');
    Route::get('/admin/wellness-center/view/{id}', [AdminwellnessController::class, 'view'])->name('admin.dashboard.wellness.view');


    //SCHEDULES
    Route::get('/admin/schedule/all', [AdminscheduleController::class, 'index'])->name('admin.dashboard.schedule.index');
    Route::get('/admin/schedule/create', [AdminscheduleController::class, 'create'])->name('admin.dashboard.schedule.create');
    Route::post('/admin/schedule/save', [AdminscheduleController::class, 'store'])->name('admin.dashboard.schedules.store');
    Route::get('/admin/schedule/edit/{id}', [AdminscheduleController::class, 'edit'])->name('admin.dashboard.schedule.edit');
    Route::put('/admin/schedule/update/{id}', [AdminscheduleController::class, 'update'])->name('admin.dashboard.schedules.update');
    Route::delete('/admin/schedule/{id}', [AdminscheduleController::class, 'destroy'])->name('admin.dashboard.schedule.destroy');
    Route::get('/admin/schedule/view/{id}', [AdminscheduleController::class, 'show'])->name('admin.dashboard.schedule.show');
    Route::post('/admin/schedule/image-crop-class', [AdminscheduleController::class, 'imageCropPost'])->name("imageCropClass");
    Route::get('/admin/schedules/all-bookings', [SchedulebookingController::class, 'index'])->name("admin.dashboard.schedule.bookings");


    Route::post('/admin/schedule-recurring/save', [AdminscheduleController::class, 'storeRecurring'])->name('admin.dashboard.schedules.storeRecurring');
    Route::get('/admin/schedule/edit-recurring/{id}', [AdminscheduleController::class, 'editRecurring'])->name('admin.dashboard.schedule.editRecurring');
    Route::put('/admin/schedule/update-recurring/{id}', [AdminscheduleController::class, 'updateRecurring'])->name('admin.dashboard.schedules.updateRecurring');







    //NEW SCHEDULES
    Route::get('/admin/schedule', [AdminscheduleController::class, 'scheduleindex'])->name('admin.dashboard.schedulez.scheduleindex');
    Route::get('/admin/schedule/all', [AdminscheduleController::class, 'allschedules'])->name('admin.dashboard.schedule.allschedules');
    Route::get('/admin/schedule/new', [AdminscheduleController::class, 'schedulenewCourse'])->name('admin.dashboard.schedule.newCourse');
    Route::post('/admin/schedule/schedule-store', [AdminscheduleController::class, 'scheduleStore'])->name('admin.dashboard.schedule.scheduleStore');
    Route::get('/admin/course-schedule/edit/{id}', [AdminscheduleController::class, 'editCoursechedule'])->name('admin.dashboard.schedule.editCoursechedule');
    Route::put('/admin/course-schedule/update/{id}', [AdminscheduleController::class, 'scheduleUpdate'])->name('admin.dashboard.schedule.scheduleUpdate');
    Route::get('/admin/schedule/view/{id}', [AdminscheduleController::class, 'scheduleview'])->name('admin.dashboard.schedulez.scheduleview');
    Route::delete('/admin/schedule/delete/{id}', [AdminscheduleController::class, 'scheduledelete'])->name('admin.dashboard.schedulez.scheduledelete');

    //RECURRING SCHEDILLE
    Route::get('/admin/schedule-recurring/new', [AdminscheduleController::class, 'scheduleRecurringnewCourse'])->name('admin.dashboard.schedule.recurring.newCourse');

});



Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    //echo Artisan::output();
    return redirect()->back()->with('message', 'Cache flushed successfully...');
});


/*------------------------------------------
--------------------------------------------
All Manager Routes List - Not Used yet 
this type user
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
