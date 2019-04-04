<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('teste/welcome');
});

Route::get('/cliente', function (){
    $csrfToken = csrf_token();
    $html = <<<HTML
    <html>
    <body>
        <h1>Cliente</h1>
        <form method="post" action="/cliente/cadastrar">
            <input type="hidden" name="_token" value="$csrfToken">
            <input type="text" name="name" />
            <button type="submit">Enviar</button>
            </form>
    </body>
    </html>
HTML;
    return $html;
});

Route::post('/cliente/cadastrar', function(Request $request){
   echo $request->get('name');
   echo '<br>';
   echo $request->name;
});

Route::get('/cliente-echo', function (){
   echo "texto com echo";
});
