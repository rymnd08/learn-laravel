<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listings;

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
//     return view('listings', [
//         'name' => 'rymnd',
//         'listings' => [
//             [
//                 'id' => 1,
//                 'title' => 'sample title 1',
//                 'sample' => 'sample description '
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'sample title 2',
//                 'sample' => 'sample description '
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'sample title 3',
//                 'sample' => 'sample description '
//             ]
//         ]


//     ]);
// });

// Route::get('/welcome', function () {
//     return response([['kape' => 123],['wala' => 'lang']]);
// });
// Route::get('/post/{id}', function($id){
//     // dd($id);
//     // return response('Post: ' . $id);
//     return response() -> json(Listings::findByID($id));
// });
// Route::get('/search', function(Request $request){
//     return $request->kape . ' ' . $request->rymnd;
// });

Route::get('/', function(){
    return view('listings');
});
// Route::get('/listings/{id}', function($id){
//     return view('listings', [
//         'listings' => Listings::all(),
//         'notAll' => Listings::notAll(),
//         'findID' => Listings::findByID($id)
//     ] );
// });

