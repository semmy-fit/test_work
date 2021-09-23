<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Base extends Controller
{
    public function index()
    {

        return view('base');
    }
//    public function view($page = 'base')
//    {
//        if ( ! is_file(APPPATH.'/Views'.$page.'.php')) {
//            // Whoops, we don't have a page for that!
//            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
//        }
//
//
//
//
//        echo view('base');
//
//    }

}