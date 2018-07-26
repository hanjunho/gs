<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
  public function index() {
    $lists = \App\Guruchain::where('cafeBoardName','원리와 방법1')->orderBy( 'createdAt' )->paginate(10);




    return view('welcome', compact('lists'));
  }

  public function all() {
    $lists = \App\Guruchain::orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists'));
  }

  public function sort($name) {
    $lists = \App\Guruchain::where('creatorNm',$name)->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists'));
  }

  public function sortb($name) {
    $lists = \App\Guruchain::where('cafeBoardName',$name)->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists'));
  }

   public function sortTime($time) {

    $lists = \App\Guruchain::where('createdAt',$time)->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists'));
  }

  public function sortc() {
    $lists = \App\Guruchain::where('cafeBoardName','원리와 방법1' )->orWhere('cafeBoardName','글읽고 질문')->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists')); 
  }
}
