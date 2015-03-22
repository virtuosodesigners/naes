<?php
class Candidate extends \Eloquent{


    public function payment(){
        return $this->hasMany('Payment');
    }
}

?>