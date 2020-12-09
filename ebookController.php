<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function aboutus () {
        return view('about');
        }
        
    public function list () {

        $title = array(
            
            'Kill the Shadows',
            'Ghost Fire',
            'A good neighborhood',
            'The chestnut man',
            'Snow Creek'
        );

        $author = array(
            'Val McDermid',
            'Wilbur Smith',
            'Therese Anne Fowler',
            'Soren Sveistrup',
            'Gregg Olsen'
        );

        $ISBN = array(
            '9780007327614',
            '9781785769450',
            '9781250237286',
            '9780062895387',
            '9781838881702'
        );

        $category = array(
            'Crime',
            'Action Suspense',
            'Family Life',
            'Horror',
            'Crime'
        );

        $numofpages = array(
            '565 pages',
            '491 pages',
            '329 pages',
            '501 pages',
            '260 pages'
        );

        return view('list', compact('title','author','ISBN','category','numofpages'));
        }
    
}
