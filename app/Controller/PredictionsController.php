<?php

class PredictionsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('predictions', $this->Prediction->find('all'));
    }
    
    public function view($slug = null) {
        $this->Prediction->slug = $slug;
        $this->set('prediction', $this->Prediction->read());
    }
    
}