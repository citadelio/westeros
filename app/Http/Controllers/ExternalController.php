<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalController extends Controller
{
    public function books(Request $request){
        //get name of book from querystring
        $bookname = $request->query('name');
       if($bookname){
           $ch = curl_init();
           $url = 'https://www.anapioficeandfire.com/api/books?name='. curl_escape($ch, $bookname);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $response = curl_exec($ch);
           $response = json_decode($response);
           if(sizeOf($response)){
            $res = $response['0'];
        return response()->json(
            array(
                "status_code"=>200, 
                "status"=>"success",
                "data"=> array(
                    array(
                    "name"=>$res->name,
                    "isbn"=>$res->isbn,
                    "authors"=>$res->authors,
                    "number_of_pages"=>$res->numberOfPages,
                    "publisher"=>$res->publisher,
                    "country"=>$res->country,
                    "release_date"=>$res->released,
                    )
                )
            )
            );
        }else{
            return response()->json(
                array(
                    "status_code"=>200, 
                    "status"=>"success",
                    "data"=> $response
                    )
            );
        }
       }
    }
}
