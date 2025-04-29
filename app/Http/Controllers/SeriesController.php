<?php
// o controller recebe a requisiçao de forma que ele possa tratar a requisiçao e devolvendo  a resposta em formatos variados 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//serve para ter acesso a funcao $request, para podermos pegar detalhes da requisiçao feita à este controller
class SeriesController extends Controller

{
    public function index()
    {
        //nunca usar echo em um controller
        $series = [
            'Punisher',
            'Lost',
            'Greys Anatomy',
            'The Walking Dead'
        ];
        return view('listar-series',compact('series'));
        //estou retornando uma view() essa funcao espera um parametro 'nome-Da-View' e o segundo parametro opcional que são dados que a view pode usar 
        // a funcao compact()  pega o nome de variaveis e cria um array associando esses nomes aos valores das variaveis
        //neste caso estou chamando a view listar-series e passando os dados (arrays) series 
        //o laravel analisa a melhor forma de exibir essa resposta, seja string ou Json etc... 
    }
}
