<?php namespace App\Models;


class ValuesModel extends \CodeIgniter\Model
{
        protected $table      = 'values';
        protected $primaryKey = 'value_id';

        protected $returnType = 'array';

        protected $allowedFields = ['series_id', 'entered', 'value'];

/**
 * Returns nothing
 * 
 * Saves a value to a series
 * 
 * @param string $serieID
 * @param string $value
 */
    public function saveNewValue($seriesID, $value)
    {
        
        $bigIntVal = $value;
        $now = new \DateTime("now", new \DateTimeZone("UTC"));

        $mysqltime = $now->format( "Y-m-d H:i:s");

        $valueData['series_id'] = $seriesID;
        $valueData['entered'] = $mysqltime;
        $valueData['values'] = $bigIntVal;
        
        $this->insert($valueData);
    }
}