<?php namespace App\Models;

class SeriesModel extends \CodeIgniter\Model
{
        protected $table      = 'series';
        protected $primaryKey = 'series_id';

        protected $returnType = 'array';

        protected $allowedFields = ['series_id', 'label', 'series_owner'];


            /**
     * Returns a series ID string
     * 
     * Creates a data series if it isn't there already
     * 
     * @param string $serieID
     * @param string $label
     * @param int   $values
     */
    public function saveNewSeries($seriesID, $label, $owner)
    {
        $existingSerie = $this->find($seriesID);

        if(is_array($existingSerie) == 0)
        {
                $seriesData['series_id'] = $seriesID;
                $seriesData['label'] = $label;
                $seriesData['series_owner'] =  $owner;
                $this->insert($seriesData);
        }
        return $seriesID;
    }
}