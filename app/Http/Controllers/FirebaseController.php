<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
 
class FirebaseController extends Controller
{

    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function create(Request $request) {
    $this->database
        ->getReference('PostData/Post' . $request['textpost'])
        ->set([
            'textPost' => $request['textpost'] ,
            'userID' => $request['userID'],
            'username' => $request['username']
        ]);

    return response()->json('blog has been created');
    }

    public function edit(Request $request) {
    $this->database->getReference('PostData/Post' . $request['textpost'])
        ->update([
            'textPost' => $request['textpost']
        ]);
    return response()->json('Post has been edited');
    }

    public function delete(Request $request){
    $this->database
        ->getReference('PostData/Post' . $request['textpost'])
        ->remove();

    return response()->json('Post has been deleted');
    }

    public function index() {
    return response()->json($this->database->getReference('PostData')->getValue());
    }
}