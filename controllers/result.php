<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Result_Controller
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
        print "We are in search result!";
        echo $_POST["ide"];
        $model = new Result_Model;

        $hasil = $model->get_result();

        for ($i=0; $i < count($hasil) ; $i++) { 
            // print_r($hasil[$i]);
            echo "<br/><br/><br/>";
            echo "id :" . $hasil[$i]['id'];
            echo "nama :" . $hasil[$i]['nama'];
        }
        
    }
}