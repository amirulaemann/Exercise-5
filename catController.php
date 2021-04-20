<?php
// array('The Hunger Games',9780439023481,'Action',374),
//array('Catching Fire',9780439023498,'Action',391),
//array('Mockingjay',9780545310604,'Action',390),
//array('The Ballad Of Songbirds And Snakes', 9781338635171,'Action',517)
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
 public function about () {
 return view('about');
 }
 

 public function books () {
     
    $books = [['The Hunger Games','978-043-902-3481','Action','374'],
    ['Catching Fire','978-043-902-3498','Action','391'],
    ['Mockingjay','978-054-531-0604','Action','390'],
    ['The Ballad Of Songbirds And Snakes','978-133-863-5171','Action','517']];
      
    return view('list') ->with('p',$books);
 }
} 
