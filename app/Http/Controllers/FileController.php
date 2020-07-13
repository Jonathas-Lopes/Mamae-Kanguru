<?php

namespace App\Http\Controllers;

use App\Model\Painel;
use Illuminate\Http\Request;



class FileController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function sendfile(Request $request, $id)
    {
        $file = '../storage/app/public/img/' . $id;
        header("Content-Type: UNIU/file");
        header("Content-Transfer-Encoding: Binary");
        header("Content-Length:" . filesize($file));
        header("Content-Disposition: attachment; filename=$id");
        readfile($file);
        exit;
    }
}
