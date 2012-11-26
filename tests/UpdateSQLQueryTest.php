<?php
/**
 * Description of UpdateSQLQueryTest
 *
 * @author isidromerayo
 */
class UpdateSQLQueryTest extends \PHPUnit_Framework_TestCase
{
    public function testUpdateOneFieldWithoutCondition()
    {
        $table_fields = array('foo');
        $value_fields = array('value1');
        $metadata = $this->getMock('Metadata', array('getTableFields'));
        $metadata->expects($this->any())
                    ->method('getTableFields')
                    ->will($this->returnValue($table_fields));
        // Act
        $query = new UpdateSQLQuery($metadata);
        
        $result = $query->setValues($table_fields, $value_fields);
        
        // Assert
        $this->assertEquals('UPDATE my_table SET foo = "value1"', $result);
        
    }
}
