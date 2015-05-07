<?php
class Candidate extends \Eloquent{


    protected $fillable = array('id');

    public function payment(){
        return $this->hasMany('Payment');
    }

    public function note(){
        return $this->hasMany('Note');
    }
}

?>