<?php

namespace App\Http\Controllers;

use app\Models\Services;

class PagesController extends Controller
{


    public function Welcome()
    {
        $data = [
            'title' => '',
            'travel' => [
                'Almaty',
                'Astana',
                'Aqtau',
                'Burabai',
                'Turkestan',
                'Semei',
            ]
        ];
        return view('pages.list.Welcome')->with($data);
    }

    public function Almaty()
    {
        $data = [
            'title' => 'ALMATY',
            'travel' => [
                'Almaty is awesom',
            ]
        ];
        return view('pages.travel')->with($data);
    }

    public function rg()
    {
        $data = [
            'title' => '',
        ];
        return view('pages.list.Refistration.rg')->with($data);
    }

    public function sn()
    {
        $data = [
            'title' => '',
        ];
        return view('pages.list.refistration.sn')->with($data);
    }

    public function Help()
    {
        $data = [
            'title' => '',
            'travel' => [
                'Almaty',
                'Nur-sultan',
                'Aktobe',
                'Shymkent',
                'Turkestan',
                'Sharyn',
            ]
        ];
        return view('pages.list.refistration.Help')->with($data);
    }

    public function Shop()
    {
        $data = [
            'title' => '',
            'travel' => [
                'Almaty',
                'Nur-sultan',
                'Aktobe',
                'Shymkent',
                'Turkestan',
                'Sharyn',
            ]
        ];
        return view('pages.list.refistration.Shop.Shop')->with($data);
    }

    public function p1Almaty()
    {
        $data = [
            'title' => '',
            'travel' => [
                'Almaty',
                'Nur-sultan',
                'Aktobe',
                'Shymkent',
                'Turkestan',
                'Sharyn',
            ]
        ];
        return view('pages.list.refistration.Shop.p1Almaty')->with($data);
    }


}
