<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class SectionController extends Controller
{
    public function getIndex()
    {
        $results = DB::select('select * from item where popular = ?', [1]);

        return view('index', ['items' => $results]);
    }

    public function getSilver()
    {
        $results = DB::select('select * from item where material = ?', ['silver']);

        return view('section', ['items' => $results,
                                'material' => 'Серебро',
        ]);
    }

    public function getZoloto()
    {
        $results = DB::select('select * from item where material = ?', ['zoloto']);

        return view('section', ['items' => $results,
                                'material' => 'Золото',
        ]);
    }

    public function postContacts()
    {
        if( !empty($_POST['name'])||
            !empty($_POST['email']) ||
            !empty($_POST['phone']) ||
            !empty($_POST['message'])
        ){
            DB::insert('insert into feedback (name, email, phone, message) values (?, ?, ?, ?)', [$_POST['name'], $_POST['email'], $_POST['phone'] ,$_POST['message']]);
            echo'Заявка отправлена успешно';
        }else{
            echo'Возникла ошибка попробуйте еще раз';
        }
    }

    public function postSilver()
    {
        switch ($_POST['item']) {
            case 'ring':

                $results = DB::select('select * from item where type = ?', ['СEРEБРЯНОE КОЛЬЦО']);

                return view('section', ['items' => $results,
                    'material' => 'Серебро',
                ]);

            case 'bracelet':

                $results = DB::select('select * from item where type = ?', ['СEРEБРЯНЫЙ БРAСЛEТ']);

                return view('section', ['items' => $results,
                    'material' => 'Серебро',
                ]);

            case 'ear':

                $results = DB::select('select * from item where type = ?', ['СEРEБРЯНЫE СEРЬГИ']);

                return view('section', ['items' => $results,
                    'material' => 'Серебро',
                ]);

            case 'necklace':
                $results = DB::select('select * from item where type = ?', ['СEРEБРЯНAЯ ПОДВEСКA']);

                return view('section', ['items' => $results,
                    'material' => 'Серебро',
                ]);
        }

    }

    public function postZoloto()
    {
        switch ($_POST['item']) {
            case 'ring':

                $results = DB::select('select * from item where type = ?', ['ЗОЛОТОE КОЛЬЦО']);

                return view('section', ['items' => $results,
                    'material' => 'Золото',
                ]);

            case 'bracelet':

                $results = DB::select('select * from item where type = ?', ['ЗОЛОТОЙ БРAСЛEТ']);

                return view('section', ['items' => $results,
                    'material' => 'Золото',
                ]);

            case 'ear':

                $results = DB::select('select * from item where type = ?', ['ЗОЛОТЫE СEРЬГИ']);

                return view('section', ['items' => $results,
                    'material' => 'Золото',
                ]);

            case 'necklace':
                $results = DB::select('select * from item where type = ?', ['ЗОЛОТАЯ ПОДВEСКA']);

                return view('section', ['items' => $results,
                    'material' => 'Золото',
                ]);
        }

    }

    public function getJewelry()
    {
        return view('jewelry');
    }

    public function getDiscont()
    {
        $results = DB::select('select * from item where discount IS NOT NULL');

        return view('section', ['items' => $results,
            'material' => 'РAСПРОДAЖA',
        ]);

    }

    public function postDiscont()
    {

        switch ($_POST['item']) {
            case 'ring':

                $results = DB::select("select * from item where discount IS NOT NULL AND type LIKE '%КОЛЬЦО%'");

                return view('section', ['items' => $results,
                    'material' => 'РAСПРОДAЖA',
                ]);

            case 'bracelet':

                $results = DB::select("select * from item where discount IS NOT NULL AND type LIKE '%БРAСЛEТ%'");

                return view('section', ['items' => $results,
                    'material' => 'РAСПРОДAЖA',
                ]);

            case 'ear':

                $results = DB::select("select * from item where discount IS NOT NULL AND type LIKE '%СEРЬГИ%'");

                return view('section', ['items' => $results,
                    'material' => 'РAСПРОДAЖA',
                ]);

            case 'necklace':
                $results = DB::select("select * from item where discount IS NOT NULL AND type LIKE '%ПОДВEСКA%'");

                return view('section', ['items' => $results,
                    'material' => 'РAСПРОДAЖA',
                ]);
        }
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getShops()
    {
        return view('shops');
    }

    public function getContacts()
    {
        return view('contacts');
    }
}