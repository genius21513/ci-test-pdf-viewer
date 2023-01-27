<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // // Allow from any origin
        // if (isset($_SERVER['HTTP_ORIGIN'])) {
        //     // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
        //     // whitelist of safe domains
        //     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        //     header('Access-Control-Allow-Credentials: true');
        //     header('Access-Control-Max-Age: 86400');    // cache for 1 day
        // }

        
        // // Access-Control headers are received during OPTIONS requests
        // if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        //         header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

        //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        //         header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        // }
        
        // if (!isset($_GET['pdf_file']) || empty($_GET['pdf_file'])) {
        //     header("Location: error.php");
        //     exit();
        // } else {
        //     $pdf_file = $_GET['pdf_file'];
        // }

        return view('index');
    }

    public function view_html()
    {
        return view('view_html');
    }
    public function view_pdf()
    {
        
        // // Allow from any origin
        // if (isset($_SERVER['HTTP_ORIGIN'])) {
        //     // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
        //     // whitelist of safe domains
        //     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        //     header('Access-Control-Allow-Credentials: true');
        //     header('Access-Control-Max-Age: 86400');    // cache for 1 day
        // }

        
        // // Access-Control headers are received during OPTIONS requests
        // if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        //         header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

        //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        //         header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        // }
        
        // if (!isset($_GET['pdf_file']) || empty($_GET['pdf_file'])) {
        //     header("Location: error.php");
        //     exit();
        // } else {
        //     $pdf_file = $_GET['pdf_file'];
        // }

        return view('view_pdf');
    }

    public function make_pdf() 
    {
        // return view('make_pdf');
    }
}

