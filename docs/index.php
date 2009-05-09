<?php
require_once('init.php');

class index_page extends pagebase {

	//bind
	function bind() {
		$this->page_title = SITE_TAG_LINE;	

        //get count of leaflets
        $this->assign("leaflet_count", $this->get_leaflet_count());

		//get recent leaflets
		$leaflet_search = factory::create("leaflet_search");

        $leaflets = $leaflet_search->search(true);
        $leaflets_search->start = 0;
        $leaflets_search->number = 20;        
        $this->assign("leaflets", $leaflets);			
        $this->assign("hide_logo", true);			        
	}

    private function get_leaflet_count(){
        $return = 0;
		$cache = cache::factory();
    	$cached = $cache->get("total_leaflet_count");    	
        if($cached !== false && isset($cached)){
            $return = $cached;
        }else{
            $leaflet = factory::create('leaflet');
            $return = $leaflet->count();            
            $cache->set("total_leaflet_count", $return);
        }
        return $return;
    }
    
}

//create class instance
$index_page = new index_page();

?>
