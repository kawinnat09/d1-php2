<?php
    //Defind Class
    class countries {
        //Properties
        public $proivince;
        public $hit;

        //Methods
        function set_proivince($proivince){
            $this->proivince = $proivince;
        }
        function get_proivince()
            return $this->proivince;
    }
    //Defind Object
    $newTour = new Countries();
    $newhit = new Countries();
    $newTour->set_proivince('Trat');
    $newhit->set_proivince('Kohchang');
    echo $newTour->get_proivince();
    echo "<br />";
    echo $newhit->get_proivince();

?>