<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class News_Controller
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
        echo $_POST["ide"]. " inid dari controller";
        //this is a test , and we will be removing it later
        print "We are in news!";
        print '<br/>';
        $vars = print_r($getVars, TRUE);
        print 
        (
            "The following GET vars were passed to this controller:" .
            "<pre>".$vars."</pre>"
        );


        $newsModel = new News_Model;

        $article = $newsModel->get_article('new');
            
        $view = new View_Model($this->template);
            
        //assign article data to view
        $view->assign('title' , $article['title']);
        $view->assign('content' , $article['content']);

    }
}