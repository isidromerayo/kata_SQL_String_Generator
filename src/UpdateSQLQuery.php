<?php
/**
 * Description of UpdateSQLQuery
 *
 * @author imc
 */
class UpdateSQLQuery extends SQLQuery
{
    public function __construct($metadata)
    {
        $this->metadata = $metadata;
    }
    
    public function setValues($fields, $values)
    {
        return 'UPDATE my_table SET foo = "value1"';
    }            
}
