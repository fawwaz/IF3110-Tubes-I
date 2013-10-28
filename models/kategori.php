<?php

class Kategori_Model
{
	
	private $db;

    public function __construct(){
        $this->db = new MysqlImproved_Driver;
    }
	
	public function get_result($namakategori){
		$this->db->connect();
		//$value = "'%" . $namabarang . "%'";
		$value = "'%".$namakategori . "%'";
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
            	`kategori` LIKE " . $value . "
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
