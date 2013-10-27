<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class Result_Model
{
    /**
     * Array of articles. Array keys are titles, array values are corresponding
     * articles.
     */
    private $db;

    public function __construct(){
        $this->db = new MysqlImproved_Driver;
    }

    /**
     * Fetches article based on supplied name
     * 
     * @param string $articleName
     * 
     * @return array $article
     */
    public function get_result()
    {
        $this->db->connect();

        
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                *
            FROM
                `test`
            ;
            "
        );

        //execute query
        $this->db->query();

        
        // $rows[] = $this->db->fetch('array');
        while($hasil = $this->db->fetch('array')){
            $rows[] = $hasil;
        }

        return $rows;        

    }
} 