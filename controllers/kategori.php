<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Kategori_Controller
{
    /**
     * This template variable will hold the 'view' portion of our MVC for this 
     * controller
     */
    public $template = 'news';
	
	
    
    /**
     * This is the default function that will be called by router.php
     * 
     * @param array $getVars the GET variables posted to index.php
     */
    public function main(array $getVars)
    {
        //this is a test , and we will be removing it later
        print "We are in detail barang!";
        
		$model = new Kategori_Model;
		
		$kat = $getVars['namakategori'];

		$hasil = $model->get_result($kat);
		
		for ($i=0; $i < count($hasil) ; $i++) { 
            // print_r($hasil[$i]);
            echo "<br/><br/><br/>";
            echo "ID barang:" . $hasil[$i]['id_barang'];
            echo "Nama :" . $hasil[$i]['nama'];
			echo "Harga :" . $hasil[$i]['harga'];
			echo "Stok :" . $hasil[$i]['stok'];
			echo "<img src=\"". $hasil[$i]['img_dir'] . "\">";
        }

    }
}