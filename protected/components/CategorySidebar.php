<?php
class CategorySidebar extends CWidget
{
    public function init()
    {
    	
    }
    
    public function run()
    {
    	//���·���
        $category = Category::getCategoryList();
        
	    $this->render('category', array(
	    	'category'=>$category
	    ));
    }
}