<?php namespace App\Controllers;

use App\Models\SeriesModel;
use App\Models\ValuesModel;

class Home extends BaseController
{
    public function index()
    {
        $seriesModel = new SeriesModel();
        $valuesModel = new ValuesModel();

        $params = $this->request->getGet();
        if (!array_key_exists('s', $params)) {
            $viewData['newUUID'] = $seriesModel->GUIDv4(true);
            return view('welcome_message', $data);
        }

        $viewData['series_name'] = $params['s'];

        if (array_key_exists('v', $params) && array_key_exists('s', $params))  {
            $viewData['stored_value'] = $params['v'];
            $seriesID = $seriesModel->SaveNewSeries($params['s'], '', '');
            $valuesModel->SaveNewValue($seriesID, $params['v']);
        }
        
        return view('series', $viewData);
        //return view('welcome_message');
    }


    
}
