<?php

use Illuminate\Support\Facades\Route;

// User
use App\Http\Controllers\{UserDashboardController};


//////------User-----//////

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth']], function () {

  Route::get('dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
});


// Admin
use App\Http\Controllers\Admin\{DashboardController, ChangeStatusController, AdminController};
use App\Http\Controllers\Admin\{BusinessSettingController,FaqController,SeoController};
use App\Http\Controllers\Admin\{GalleryController,ServiceController, BlogController};

/////////////..... -----Admin------///////////////////////

Route::get('/admin/dashboard', function () {
  return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';

Route::group(['middleware' => ['auth:admin','checkStatus'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

  Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Change Status
  Route::post('change-status', [ChangeStatusController::class, 'changeStatus'])->name('change.status');
  Route::delete('delete_row_id', [ChangeStatusController::class, 'deleteRowId'])->name('delete_row_id');

// Role Manage// Admin
  Route::get('staff', [AdminController::class, 'index'])->name('admin');
  Route::post('staff-create', [AdminController::class, 'create'])->name('create');
  Route::get('staff-create', [AdminController::class, 'add'])->name('create');
  Route::get('staff-edit/{id}', [AdminController::class, 'edit'])->name('edit');
  Route::get('staff-data', [AdminController::class, 'data'])->name('data');
  // Role
  Route::get('role', [AdminController::class, 'role'])->name('role');
  Route::post('role-create', [AdminController::class, 'createRole'])->name('role_create');
  Route::get('role-create', [AdminController::class, 'addRole'])->name('role_create');
  Route::get('role-edit/{id}', [AdminController::class, 'editRole'])->name('role_edit');
  Route::get('role-data', [AdminController::class, 'dataRole'])->name('role_data');
  // Permission
  Route::get('permission', [AdminController::class, 'permission'])->name('permission');
  Route::post('permission-create', [AdminController::class, 'createPermission'])->name('permission_create');
  Route::get('permission-create', [AdminController::class, 'addPermission'])->name('permission_create');
  Route::get('permission-edit/{id}', [AdminController::class, 'editPermission'])->name('permission_edit');
  Route::get('permission-data', [AdminController::class, 'dataPermission'])->name('permission_data');

// Business Setting
  Route::get('business-setting', [BusinessSettingController::class, 'index'])->name('business_setting');
  Route::get('about-setting', [BusinessSettingController::class, 'about'])->name('about_setting');
  Route::post('business-setting_-update', [BusinessSettingController::class, 'update'])->name('business_setting_update');
  Route::get('cms_setting', [BusinessSettingController::class, 'cmsSetting'])->name('cms_setting');
  Route::post('cms_setting-update', [BusinessSettingController::class, 'updateCmsSetting'])->name('cms_setting_update');
 
// Image Galleries
  Route::get('gallery', [GalleryController::class, 'gallery'])->name('gallery');
  Route::post('gallery-create', [GalleryController::class, 'creategallery'])->name('gallery_create');
  Route::get('gallery-create', [GalleryController::class, 'addgallery'])->name('gallery_create');
  Route::get('gallery-edit/{id}', [GalleryController::class, 'editgallery'])->name('gallery_edit');
  Route::get('gallery-data', [GalleryController::class, 'dataGallery'])->name('gallery_data');
  // App Slider
  Route::get('slider', [GalleryController::class, 'slider'])->name('slider');
  Route::post('slider-create', [GalleryController::class, 'createSlider'])->name('slider_create');
  Route::get('slider-create', [GalleryController::class, 'addSlider'])->name('slider_create');
  Route::get('slider-edit/{id}', [GalleryController::class, 'editSlider'])->name('slider_edit');
  Route::get('slider-data', [GalleryController::class, 'dataSlider'])->name('slider_data');

// Seo
  //Route::get('seo', [Seocontroller::class, 'index'])->name('seo');
  Route::post('seo-create', [Seocontroller::class, 'create'])->name('seo_create');
  Route::get('seo-create', [Seocontroller::class, 'add'])->name('seo_create');
  Route::get('seo-edit/{id}', [Seocontroller::class, 'edit'])->name('seo_edit');
  Route::get('seo-data', [Seocontroller::class, 'dataSeo'])->name('seo_data');
  // CMS Heading
  Route::get('cms-heading', [SeoController::class, 'heading'])->name('heading');
  Route::post('cms-heading-create', [SeoController::class, 'createHeading'])->name('heading_create');
  Route::get('cms-heading-create', [SeoController::class, 'addHeading'])->name('heading_create');
  Route::get('cms-heading-edit/{id}', [SeoController::class, 'editHeading'])->name('heading_edit');
  Route::get('cms-heading-data', [Seocontroller::class, 'dataHeading'])->name('heading_data');

// Services
  Route::get('resorts', [ServiceController::class, 'services'])->name('services');
  Route::post('resort-create', [ServiceController::class, 'createServices'])->name('services_create');
  Route::get('resort-create', [ServiceController::class, 'addServices'])->name('services_create');
  Route::get('resort-edit/{id}', [ServiceController::class, 'editServices'])->name('services_edit');
  Route::get('resort-data', [ServiceController::class, 'dataServices'])->name('services_data');
  // Features
  Route::get('feature', [ServiceController::class, 'feature'])->name('feature');
  Route::post('feature-create', [ServiceController::class, 'createFeature'])->name('feature_create');
  Route::get('feature-create', [ServiceController::class, 'addFeature'])->name('feature_create');
  Route::get('feature-edit/{id}', [ServiceController::class, 'editFeature'])->name('feature_edit');
  Route::get('feature-data', [ServiceController::class, 'dataFeature'])->name('feature_data');

// Blogs Category
  Route::get('blog-category', [BlogController::class, 'category'])->name('blog_category');
  Route::post('blog-category-create', [BlogController::class, 'createCategory'])->name('blog_category_create');
  Route::get('blog-category-create', [BlogController::class, 'addCategory'])->name('blog_category_create');
  Route::get('blog-category-edit/{id}', [BlogController::class, 'editCategory'])->name('blog_category_edit');
  Route::get('blog-category-data', [BlogController::class, 'dataCategory'])->name('blog_category_data');
  // Blog
  Route::get('blog', [BlogController::class, 'blog'])->name('blog');
  Route::post('blog-create', [BlogController::class, 'createBlog'])->name('blog_create');
  Route::get('blog-create', [BlogController::class, 'addBlog'])->name('blog_create');
  Route::get('blog-edit/{id}', [BlogController::class, 'editBlog'])->name('blog_edit');
  Route::get('blog-data', [BlogController::class, 'dataBlog'])->name('blog_data');

// Faq
  Route::get('faq', [FaqController::class, 'faq'])->name('faq');
  Route::post('faq-create', [FaqController::class, 'createFaq'])->name('faq_create');
  Route::get('faq-create', [FaqController::class, 'addFaq'])->name('faq_create');
  Route::get('faq-edit/{id}', [FaqController::class, 'editFaq'])->name('faq_edit');
  Route::get('faq-data', [FaqController::class, 'dataFaq'])->name('faq_data');
  // Testimonial
  Route::get('testimonial', [FaqController::class, 'testimonial'])->name('testimonial');
  Route::post('testimonial-create', [FaqController::class, 'createTestimonial'])->name('testimonial_create');
  Route::get('testimonial-create', [FaqController::class, 'addTestimonial'])->name('testimonial_create');
  Route::get('testimonial-edit/{id}', [FaqController::class, 'editTestimonial'])->name('testimonial_edit');
  Route::get('testimonial-data', [FaqController::class, 'dataTestimonial'])->name('testimonial_data');

  // Contacts
  Route::get('contact-us', [DashboardController::class, 'contact'])->name('contact');
  Route::get('contact-data', [DashboardController::class, 'dataContact'])->name('contact_data');
  // NewsLetter
  Route::get('news-letter', [DashboardController::class, 'newsLetter'])->name('news_letter');
  // User Registered
  Route::get('user-register', [DashboardController::class, 'index'])->name('user_register');
  
});
Route::post('contact-create', [UserDashboardController::class, 'createContact'])->name('contact_create');
Route::Post('news-letter-create', [UserDashboardController::class, 'createNewsLetter'])->name('news_letter');


// Front End Routes/////
use App\Http\Controllers\Frontend\{IndexController,PhonePeController};


// Index
Route::get('/', [IndexController::class, 'index'])->name('front.index');

// About
Route::get('about-us', [IndexController::class, 'about'])->name('front.about');
Route::get('term-condition', [IndexController::class, 'termCondition'])->name('front.termCondition');
Route::get('privacy-policy', [IndexController::class, 'privacyPolicy'])->name('front.privacyPolicy');

// Blogs
Route::get('blog', [IndexController::class, 'blog'])->name('front.blog');
Route::get('blog/{id}/{slug}', [IndexController::class, 'blog'])->name('front.blog_category');
Route::get('blog-details/{slug}', [IndexController::class, 'blogDetails'])->name('front.blog_details');
Route::get('resorts', [IndexController::class, 'services'])->name('front.rooms');
Route::get('resort_details/{slug}', [IndexController::class, 'serviceDetails'])->name('front.service_details');

//Department
Route::post("doctor-search", [IndexController::class, 'searchDoctor'])->name('front.doctor_search');
Route::post("search-data", [IndexController::class, 'searchData'])->name('front.search_data');

// Contact
Route::get('contact-us', [IndexController::class, 'contact'])->name('front.contact');
Route::get('invest', [IndexController::class, 'invest'])->name('front.invest');
Route::get('gallery', [IndexController::class, 'gallery'])->name('front.gallery');
// Route::get('booking', [IndexController::class, 'booking'])->name('front.booking');
// Route::get('offers', [IndexController::class, 'offers'])->name('front.offers');

