<?php

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


Auth::routes();

Route::get('/', 'concoursePagesController@indexPage');

Route::get('/page/comingsoon', 'concoursePagesController@comingsoon');


Route::get('/services', 'concoursePagesController@servicesPage');


Route::get('/about', 'concoursePagesController@about');

Route::get('/application/netcategory/publish', 'NetCategoryController@AppForm');

Route::post('/application/netcategory/publish', 'NetCategoryController@publishApp');


Route::get('/application/netcategory/list', 'NetCategoryController@All');


Route::delete('/application/netcategory/{id}/delete', 'NetCategoryController@Delete');



#[:::::::::: Starting Blog Post Route 
Route::get('/application/dashboard/publish', 'publishAppController@AppForm');

Route::post('/business/review', 'businessReviewsController@addReview');

Route::post('/blog/review', 'NetBlogReviewController@addReview');


Route::post('/course/user/review', 'NetCourseReviewsController@addReview');




Route::post('/application/dashboard/publish', 'publishAppController@publishApp');

Route::get('/application/dashboard/{id}/refurbish', 'refurbishAppController@refurbishForm');

Route::put('/application/dashboard/{id}/refurbish', 'refurbishAppController@refurbishApp');


Route::get('/application/dashboard/profile', 'DashboardProfilePageController@dashboardProfile');
 #Ending Blog Post Route ::::::::::::::::]



 #Starting profile Page Route ::::::::::::::::]
Route::get('/application/dashboard/profile', 'DashboardProfilePageController@dashboardProfile');
 #Endingprofile Page Route ::::::::::::::::]




#[:::::::::: Starting Store Management Routes
Route::get('/application/store/publish', 'firstStorePublishController@publish');

Route::put('/application/store/{id}/refurbish', 'firstStorePublishController@refurbishStore');

Route::get('/application/store/{id}/refurbish', 'firstStorePublishController@refurbishbStoreForm');

Route::post('/application/store/publish', 'firstStorePublishController@createStore');


Route::get('/application/store/list', 'firstStorePublishController@takeAll');

Route::delete('/application/store/{id}/delete', 'firstStorePublishController@Delete');
 #Ending Store Management Routes ::::::::::::::::]



#Starting Store Data Display Management Routes ::::::::::::::::]
Route::get('/{business}/store', 'firstStoreInfoController@storeList');

Route::get('/{business?}/store/{id?}', 'firstStoreInfoController@storeDetail');
#Route::get('/application/{business}/store-list', 'firstStorePublishController@storeList');

#Ending Store Data Display Management Routes ::::::::::::::::]


#/search/Restaurant/in/Abuja/rendering/POS=/wifiService=/suitableForEvents=/airConditioning=/cableTv=/sereneEnvironment=/streetParking=




#Starting Stelle Routes ::::::::::::::::]
Route::get('/business/{business}/detail', 'stellarPagesController@schemaOne');


Route::get('/business/{searchterm}/{location}', 'stellarPagesController@schemaTwo');

Route::get('/search/{searchterm?}/in/{location?}', 'stellarPagesController@SchemaThree');

Route::get('/search/guba/{handle}/function', 'stellarPagesController@SchemaFour');

Route::get('/{gubaHandle?}', 'stellarPagesController@schemaFive');

Route::get('/business/{gubaHandle?}/facade', 'stellarPagesController@schemaSix');

Route::get('/search/{location?}/location', 'stellarPagesController@schemaSeven');


Route::get('/businesses/{category?}/category', 'stellarPagesController@schemaEight');





Route::get('/businesses/{location?}/location/all', 'stellarPagesController@schemaNine');

Route::get('/business/advance/search/query', 'stellarPagesController@schemaTen');



Route::get('/search/business/{business?}/alt', 'stellarPagesController@schemaTwelve');

Route::get('/search/gubahandle/{guba?}/alt', 'stellarPagesController@schemaThirdten');


Route::get('/search/{searchterm?}/in/{location?}/rendering/POS={POS?}/wifiService={wifiService?}/suitableForEvents={suitableForEvents?}/airConditioning={airConditioning?}/cableTv={cableTv?}/sereneEnvironment={sereneEnvironment?}/streetParking={streetParking?}', 'stellarPagesController@schemaEleven');


#Route::get('/application/{business}/store-list', 'firstStorePublishController@storeList');

#Ending Stellar route::::::::::::::::]






#[:::::::::: Starting Blog Post Route 
Route::get('/resources/blog/list', 'blogPostController@takeAll');

Route::get('/resources/blog/publish', 'blogPostController@postForm');

Route::post('/resources/blog/publish', 'blogPostController@publishPost');

Route::get('/resources/blog/{id}/refurbish', 'blogPostController@refurbishblogform');

Route::delete('/resources/blog/{id}/delete', 'blogPostController@Delete');

Route::put('/resources/blog/{id}/refurbish', 'blogPostController@refurbishblogpost');




Route::get('/resources/blog/homestead', 'BlogViewsController@schemaOne');

Route::get('/resources/blog/{slug?}/pane', 'BlogViewsController@schemaTwo');

Route::get('/resources/blog/{id}/article', 'BlogViewsController@schemaThree');
 #Ending Blog Post Route ::::::::::::::::]


#[:::::::::: courses pane   

Route::delete('/resources/coursepane/{id}/delete', 'coursePaneController@Delete');

Route::get('/resources/coursepane/list', 'coursePaneController@takeAll');

Route::get('/resources/coursepane/publish', 'coursePaneController@coursePaneForm');

Route::post('/resources/coursepane/publish', 'coursePaneController@publishCourse');

Route::get('/resources/coursepane/{id}/refurbish', 'coursePaneController@refurbishbCoursepaneForm');

Route::put('/resources/coursepane/{id}/refurbish', 'coursePaneController@refurbishCoursePane');




Route::get('/resources/course/homestead', 'coursesViewController@schemaOne');

Route::get('/resources/course/{slug?}/pane', 'coursesViewController@schemaTwo');

Route::get('/resources/course/{id}/article', 'coursesViewController@schemaThree');

#::::::::::::::::]



#[:::::::::: courses panel  

Route::get('/resources/coursepanel/list', 'coursePanelController@takeAll');

Route::get('/resources/coursepanel/publish', 'coursePanelController@coursePanelForm');

Route::post('/resources/coursepanel/publish', 'coursePanelController@publishCoursePanel');

Route::get('/resources/coursepanel/{id}/refurbish', 'coursePanelController@refurbishbCoursePanelForm');

Route::delete('/resources/coursepanel/{id}/delete', 'coursePanelController@Delete');

Route::put('/resources/coursepanel/{id}/refurbish', 'coursePanelController@refurbishCoursePanel');


#::::::::::::::::]



#[:::::::::: courses panel  

Route::get('/resources/testimonial/list', 'testmonialController@takeAll');

Route::get('/resources/testimonial/publish', 'testmonialController@testimonialForm');

Route::get('/resources/testimonial/reviews', 'testmonialController@takeAll');





Route::post('/resources/testimonial/publish', 'testmonialController@publishTestimonial');

Route::get('/resources/testimonial/{id}/refurbish', 'testmonialController@refurbishTestimonialForm');

Route::delete('/resources/testimonial/{id}/delete', 'testmonialController@Delete');

Route::put('/resources/testimonial/{id}/refurbish', 'testmonialController@refurbishTestimonial');


#::::::::::::::::]


Route::post('/email/Subscribtion', 'EmailSubcriptionController@index');






#[:::::::::: business Category  

#Route::get('/resources/coursepanel/list', 'coursePanelController@takeAll');

Route::get('/resources/business-category/view', 'NetCategory@index');

//Route::get('/resources/testimonial/reviews', 'testmonialController@userReviews');





#Route::post('/resources/coursepanel/publish', 'coursePanelController@publishCoursePanel');

#Route::get('/resources/coursepanel/{id}/refurbish', 'coursePanelController@refurbishbCoursePanelForm');

#Route::delete('/resources/coursepanel/{id}/delete', 'coursePanelController@Delete');

#Route::put('/resources/coursepanel/{id}/refurbish', 'coursePanelController@refurbishCoursePanel');


#::::::::::::::::]



Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');



Route::get('/home', 'HomeController@index')->name('home');




//Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');



Route::get('/verify/account', 'concoursePagesController@verifyAccount');




Route::get('/account/{verifyToken}/{id}/{email}/signup/welcome', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


Route::put('/account/regular/{id}', 'Auth\RegisterController@schemaOne');

Route::put('/account/business/{id}', 'Auth\RegisterController@schemaTwo');




Route::get('/account/{id}/payment/options', 'paymentOptionsController@index');



Route::put('/payment/{id}/free', 'paymentOptionsController@freePayment');

