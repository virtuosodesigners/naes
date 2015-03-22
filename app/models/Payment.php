<?php

class Payment extends \Eloquent {
	protected $fillable = [];

    public function candidate() {
        return $this->belongs_to('Candidate');
    }
}