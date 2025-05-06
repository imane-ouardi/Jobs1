<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;



Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/signup', function () { return view('pages.signup');})->name('signup');
Route::get('/signin', function () { return view('pages.signin');})->name('signin');
Route::get('/pricing', function () { return view('pages.pricing');})->name('pricing');
Route::get('/applications/create/{job}')->name('applications.create');



// صفحة جميع الوظائف
// Route::get('/jobs', function () {
//     // يمكنك هنا جلب الوظائف والفلاتر إذا أردت
//     return view('pages.jobs');
// })->name('jobs');


Route::get('/jobs', function () {
    $jobs = Job::with('company')->latest()->paginate(12);
    return view('pages.jobs', compact('jobs'));
})->name('jobs');







Route::get('/jobs/{job}', function (Job $job) {
    return view('pages.job-details', compact('job'));
})->name('jobs.show');


Route::get('/employer-detail/{company}', function (Company $company) {
    return view('pages.employer-detail', compact('company'));
})->name('employer.detail');



Route::get('/jobs', function () {
    $query = Job::query();

    // فلترة باسم الشركة (بحث نصي)
    if (request()->filled('search')) {
        $query->whereHas('company', function($q) {
            $q->where('name', 'like', '%' . request('search') . '%');
        });
    }

    // فلترة بالتصنيف
    if (request()->filled('category')) {
        $query->where('category_id', request('category'));
    }

    // فلترة بالموقع
    if (request()->filled('location')) {
        $query->where('location', request('location'));
    }

    // فلترة بأنواع الوظائف (checkbox متعدد)
    if (request()->filled('types')) {
        $query->whereIn('type', request('types'));
    }

    // فلترة بالراتب
    if (request()->filled('salary')) {
        if (request('salary') == '1') {
            $query->whereBetween('salary', [10000, 15000]);
        } elseif (request('salary') == '2') {
            $query->whereBetween('salary', [15000, 25000]);
        } elseif (request('salary') == '3') {
            $query->where('salary', '>', 25000);
        }
    }

    $jobs = $query->with('company')->latest()->paginate(12);

    $categories = Category::all();
    $locations = Job::select('location')->distinct()->pluck('location');
    $types = Job::select('type')->distinct()->pluck('type');

    return view('pages.jobs', compact('jobs', 'categories', 'locations', 'types'));
})->name('jobs');



