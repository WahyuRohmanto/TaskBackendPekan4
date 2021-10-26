<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\PushoverHandler;

class AnimalControler extends Controller
{
    public $animals = ["kucing", "ayam" , "ikan"];
    function index(){
        echo "menampilkan data animals <br>";
        foreach($this->animals as $animal){
            echo $animal;
            echo "<br>";
        }
    } 

    function store(Request $request){
        echo "menambahkan hewan baru <br>";
        array_push($this->animals, $request-> nama);
        $this->index();
    }

    function update(Request $request, $id){
        echo "mengupdate data hewan id : $id <br>";
        $this->animals[$id] = $request->nama;
        $this->index();
    }

    function destroy($id){
        echo "menghapus data hewan id : $id  <br>";
        unset($this->animals[$id]);
        $this->index();
    }
}
