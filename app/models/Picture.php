<?php

class Picture extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }
}