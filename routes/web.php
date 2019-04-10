<?php
use Illuminate\Http\Request;

// MVC - Model - View - Controller
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

Route::get('controller/cliente/cadastrar', 'ClientsController@cadastrar');

Route::get('/for-if/{value}', function ($value) {
 return view('for-if')
     ->with('value',$value)
     ->with('myArray', [
         'chave1' => 'valor1',
         'chave2' => 'valor2',
         'chave3' => 'valor3',
     ]);
});
Route::get('/blade', function (){
   $nome = 'João Paulo';
   $dia = '03/04/2019';
   return view('test')
       ->with('nome',$nome)
       ->with('dia',$dia);
});

Route::get('/cliente/cadastrar', function () {
    $nome = 'João Paulo';
    $dia = '03/04/2019';
    /*return view('cadastrar', [
        'nome' => $nome,
        'dia' => $dia
    ]);*/
    //return view('cadastrar',compact('nome', 'dia'));
    return view('cliente.cadastrar')
        ->with('nome',$nome)
        ->with('dia',$dia);
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
