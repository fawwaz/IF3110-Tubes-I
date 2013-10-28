<?php

class Detail_Model
{
	
	private $db;

    public function __construct(){
        $this->db = new MysqlImproved_Driver;
    }
	
	public function get_result($namabarang){
		$this->db->connect();
		//$value = "'%" . $namabarang . "%'";
		$value = "'%".$namabarang . "%'";
        echo $value;
        //prepare query
        $this->db->prepare
        (
            "
            SELECT
                *
            FROM
                `data_barang`
            WHERE
            	`nama` LIKE " . $value . "
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
