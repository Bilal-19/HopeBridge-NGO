<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


//Homepage route
// Route::get("/", function () {
//     echo "Hello World";
// });

// Frontend Routes
Route::get('/', [UserController::class, 'index'])->name('Home');
Route::get('/user/about', [UserController::class, 'about'])->name('About');
Route::get('/user/projects', [UserController::class, 'projects'])->name('Our.Projects');
Route::get('/user/partners', [UserController::class, 'partners'])->name('Our.Partners');
Route::get('/user/news', [UserController::class, 'News'])->name('Home.News');
Route::get('/user/Contactus', [UserController::class, 'ContactUs'])->name('Contact.Us');
Route::get('/user/donation', [UserController::class, 'Donation'])->name('Donation');
Route::post("/user/submit/inquiry", [UserController::class,'createInquiry'])->name('Create.Inquiry');

// Backend Routes
Route::get('/admin/projects', [AdminController::class, 'Projects'])->name('Dashboard.Projects');
Route::get('/admin/add/project', [AdminController::class, 'addProject'])->name('Add.Project');
Route::post('/admin/store/project', [AdminController::class, 'saveProjectData'])->name('Store.Project');
Route::get('/admin/edit/project/{id}', [AdminController::class, 'editProjectData'])->name('Edit.Project');
Route::get('/admin/delete/project/{id}', [AdminController::class, 'deleteProject'])->name('Delete.Project');
Route::get('/admin/project/update/status/{id}', [AdminController::class, 'updateProjectStatus'])->name('Update.Project.Status');
Route::post("/admin/update/project/{id}", [AdminController::class, 'updateProjectData'])->name('Update.Project.DB');

Route::get('/admin/partners', [AdminController::class, 'Partners'])->name('Partners');
Route::get('/admin/add/partner/form', [AdminController::class, 'addPartner'])->name('Add.Partner.Form');
Route::post('/admin/add/partner', [AdminController::class, 'addPartnerToDB'])->name('Store.Partner');
Route::get("/admin/view/partner/{id}", [AdminController::class, 'viewSpecificPartner'])->name('View.Partner');
Route::get("/admin/edit/partner/{id}", [AdminController::class, 'editSpecificPartner'])->name('Edit.Partner');
Route::post('/admin/update/partner/info/{id}', [AdminController::class, 'updatePartnerInfoToDB'])->name('Update.Partner.Info');
Route::get('/admin/delete/partner/info/{id}', [AdminController::class, 'deleteSpecificPartner'])->name('Delete.Partner.Info');


Route::get('/admin/team', [AdminController::class, 'Team'])->name('Team');
Route::get('/admin/add/team/form', [AdminController::class, 'addTeamMemberForm'])->name('Add.Team.Form');
Route::post('/admin/add/team/member', [AdminController::class, 'addNewTeamMember'])->name('Add.Team');
Route::get("/admin/view/team/member/{id}", [AdminController::class, 'viewSpecificTeamMember'])->name('View.Team.Member');
Route::get("/admin/edit/team/member/{id}", [AdminController::class, 'editSpecificTeamMember'])->name('Edit.Team.Member');
Route::post("/admin/update/team/member/{id}", [AdminController::class, 'UpdateTeamMemberInfoToDB'])->name('Update.Team.Member');
Route::get("/admin/delete/team/member/{id}", [AdminController::class, 'deleteTeamMemberRecord'])->name('Delete.Team.Member');


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('Dashboard');

Route::get('/admin/news', [AdminController::class, 'News'])->name('News');
Route::get('/admin/add/news', [AdminController::class, 'addNewsForm'])->name('Add.News.Form');
Route::post('/admin/add/news',[AdminController::class, 'addNewsToDB'])->name('Add.News.To.DB');
Route::get('/admin/edit/news/{id}', [AdminController::class, 'editNewsForm'])->name('Edit.News');
Route::post('/admin/update/news/{id}',[AdminController::class, 'updateNews'])->name('Update.News');
Route::get('/admin/delete/news/{id}', [AdminController::class, 'deleteNews'])->name('Delete.News');

Route::get('/admin/users', [AdminController::class, 'Users'])->name('Users');

Route::get("/admin/faq", [AdminController::class, 'FAQ'])->name('FAQ');
Route::get("/admin/faq/form", [AdminController::class, 'FaqForm'])->name('FAQ.Form');
Route::post("/admin/create/faq", [AdminController::class, 'createFAQ'])->name('Create.FAQ');
Route::get("/admin/edit/faq/{id}", [AdminController::class, 'editFAQform'])->name('Edit.FAQ');
Route::post("/admin/update/faq/{id}", [AdminController::class, 'updateFAQ'])->name('Update.FAQ');
Route::get("/admin/delete/faq/{id}", [AdminController::class, 'deleteFAQ'])->name('Delete.FAQ');


Route::get('/admin/inquiry', [AdminController::class, 'customerInquiry'])->name('Customer.Inquiry');
