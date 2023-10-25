<?php

use App\Http\Livewire\AbookComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\All3dComponent;
use App\Http\Livewire\AlldigitalComponent;
use App\Http\Livewire\AllimagesComponent;
use App\Http\Livewire\AllquizComponent;
use App\Http\Livewire\AlltoolsComponent;
use App\Http\Livewire\AllvideosComponent;
use App\Http\Livewire\AschoolComponent;
use App\Http\Livewire\AwebComponent;
use App\Http\Livewire\Bio3dComponent;
use App\Http\Livewire\BiodigitalComponent;
use App\Http\Livewire\BioimagesComponent;
use App\Http\Livewire\BiotoolsComponent;
use App\Http\Livewire\BiovideosComponent;
use App\Http\Livewire\Che3dComponent;
use App\Http\Livewire\ChedigitalComponent;
use App\Http\Livewire\CheimagesComponent;
use App\Http\Livewire\ChetoolsComponent;
use App\Http\Livewire\ChevideosComponent;
use App\Http\Livewire\DesktopComponent;
use App\Http\Livewire\EncyComponent;
use App\Http\Livewire\EnglishdigitalComponent;
use App\Http\Livewire\FavouriteComponent;
use App\Http\Livewire\GeneralquizComponent;
use App\Http\Livewire\GeneraltoolsComponent;
use App\Http\Livewire\Geo3dComponent;
use App\Http\Livewire\GeodigitalComponent;
use App\Http\Livewire\GeoimagesComponent;
use App\Http\Livewire\GeotoolsComponent;
use App\Http\Livewire\GeovideosComponent;
use App\Http\Livewire\His3dComponent;
use App\Http\Livewire\HisdigitalComponent;
use App\Http\Livewire\HisimagesComponent;
use App\Http\Livewire\HistoolsComponent;
use App\Http\Livewire\HisvideosComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\HomeworkComponent;
use App\Http\Livewire\KinderquizComponent;
use App\Http\Livewire\LangquizComponent;
use App\Http\Livewire\LangtoolsComponent;
use App\Http\Livewire\LitdigitalComponent;
use App\Http\Livewire\LogicquizComponent;
use App\Http\Livewire\LowerquizComponent;
use App\Http\Livewire\Math3dComponent;
use App\Http\Livewire\MathdigitalComponent;
use App\Http\Livewire\MathimagesComponent;
use App\Http\Livewire\MathquizComponent;
use App\Http\Livewire\MathtoolsComponent;
use App\Http\Livewire\MathvideosComponent;
use App\Http\Livewire\MusictoolsComponent;
use App\Http\Livewire\MyBooksComponent;
use App\Http\Livewire\MyExerciseBooksComponent;
use App\Http\Livewire\New3dComponent;
use App\Http\Livewire\Phy3dComponent;
use App\Http\Livewire\PhydigitalComponent;
use App\Http\Livewire\PhyimagesComponent;
use App\Http\Livewire\PhytoolsComponent;
use App\Http\Livewire\PhyvideosComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\ReadquizComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Tech3dComponent;
use App\Http\Livewire\TechdigitalComponent;
use App\Http\Livewire\TechimagesComponent;
use App\Http\Livewire\TechvideosComponent;
use App\Http\Livewire\TutvideosComponent;
use App\Http\Livewire\UploadsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Visual3dComponent;
use App\Http\Livewire\VisualdigitalComponent;
use App\Http\Livewire\VisualimagesComponent;
use App\Http\Livewire\VisualquizComponent;
use App\Http\Livewire\VisualvideosComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home.index');

// DESKTOP
Route::get('/desktop',DesktopComponent::class)->name('desktop');
Route::get('/mybooks',MyBooksComponent::class)->name('mybooks');
Route::get('/myexbooks',MyExerciseBooksComponent::class)->name('myexbooks');
Route::get('/homework',HomeworkComponent::class)->name('homework');
Route::get('/fav',FavouriteComponent::class)->name('fav');
Route::get('/uploads',UploadsComponent::class)->name('uploads');

// 3D
Route::get('/all3d',All3dComponent::class)->name('all3d');
Route::get('/new3d',New3dComponent::class)->name('new3d');
Route::get('/bio3d',Bio3dComponent::class)->name('bio3d');
Route::get('/geo3d',Geo3dComponent::class)->name('geo3d');
Route::get('/phy3d',Phy3dComponent::class)->name('phy3d');
Route::get('/che3d',Che3dComponent::class)->name('che3d');
Route::get('/math3d',Math3dComponent::class)->name('math3d');
Route::get('/teck3d',Tech3dComponent::class)->name('teck3d');
Route::get('/his3d',His3dComponent::class)->name('his3d');
Route::get('/visual3d',Visual3dComponent::class)->name('visual3d');

// TOOLS
Route::get('/alltools',AlltoolsComponent::class)->name('alltools');
Route::get('/biotools',BiotoolsComponent::class)->name('biotools');
Route::get('/geotools',GeotoolsComponent::class)->name('geotools');
Route::get('/phytools',PhytoolsComponent::class)->name('phytools');
Route::get('/chetools',ChetoolsComponent::class)->name('chetools');
Route::get('/mathtools',MathtoolsComponent::class)->name('mathtools');
Route::get('/histools',HistoolsComponent::class)->name('histools');
Route::get('/musictools',MusictoolsComponent::class)->name('musictools');
Route::get('/langtools',LangtoolsComponent::class)->name('langtools');
Route::get('/generaltools',GeneraltoolsComponent::class)->name('generaltools');

// QUIZES
Route::get('/allquiz',AllquizComponent::class)->name('allquiz');
Route::get('/kinderquiz',KinderquizComponent::class)->name('kinderquiz');
Route::get('/lowerquiz',LowerquizComponent::class)->name('lowerquiz');
Route::get('/mathquiz',MathquizComponent::class)->name('mathquiz');
Route::get('/logicquiz',LogicquizComponent::class)->name('logicquiz');
Route::get('/langquiz',LangquizComponent::class)->name('langquiz');
Route::get('/readquiz',ReadquizComponent::class)->name('readquiz');
Route::get('/visualquiz',VisualquizComponent::class)->name('visualquiz');
Route::get('/generalquiz',GeneralquizComponent::class)->name('generalquiz');

Route::get('/3dency',EncyComponent::class)->name('3dency');

// VIDEOS
Route::get('/allvideos',AllvideosComponent::class)->name('allvideos');
Route::get('/biovideos',BiovideosComponent::class)->name('biovideos');
Route::get('/geovideos',GeovideosComponent::class)->name('geovideos');
Route::get('/phyvideos',PhyvideosComponent::class)->name('phyvideos');
Route::get('/chevideos',ChevideosComponent::class)->name('chevideos');
Route::get('/mathvideos',MathvideosComponent::class)->name('mathvideos');
Route::get('/techvideos',TechvideosComponent::class)->name('techvideos');
Route::get('/hisvideos',HisvideosComponent::class)->name('hisvideos');
Route::get('/visualvideos',VisualvideosComponent::class)->name('visualvideos');
Route::get('/tutvideos',TutvideosComponent::class)->name('tutvideos');


// DIGITAL
Route::get('/alldigital',AlldigitalComponent::class)->name('alldigital');
Route::get('/biodigital',BiodigitalComponent::class)->name('biodigital');
Route::get('/geodigital',GeodigitalComponent::class)->name('geodigital');
Route::get('/phydigital',PhydigitalComponent::class)->name('phydigital');
Route::get('/chedigital',ChedigitalComponent::class)->name('chedigital');
Route::get('/mathdigital',MathdigitalComponent::class)->name('mathdigital');
Route::get('/techdigital',TechdigitalComponent::class)->name('techdigital');
Route::get('/hisdigital',HisdigitalComponent::class)->name('hisdigital');
Route::get('/visualdigital',VisualdigitalComponent::class)->name('visualdigital');
Route::get('/engdigital',EnglishdigitalComponent::class)->name('engdigital');
Route::get('/litdigital',LitdigitalComponent::class)->name('litdigital');

// IMAGES
Route::get('/allimages',AllimagesComponent::class)->name('allimages');
Route::get('/bioimages',BioimagesComponent::class)->name('bioimages');
Route::get('/geoimages',GeoimagesComponent::class)->name('geoimages');
Route::get('/phyimages',PhyimagesComponent::class)->name('phyimages');
Route::get('/cheimages',CheimagesComponent::class)->name('cheimages');
Route::get('/mathimages',MathimagesComponent::class)->name('mathimages');
Route::get('/techimages',TechimagesComponent::class)->name('techimages');
Route::get('/hisimages',HisimagesComponent::class)->name('hisimages');
Route::get('/visualimages',VisualimagesComponent::class)->name('visualimages');


Route::get('/products',ProductsComponent::class)->name('products');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/abook',AbookComponent::class)->name('abook');
Route::get('/aweb',AwebComponent::class)->name('aweb');
Route::get('/aschool',AschoolComponent::class)->name('aschool');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
