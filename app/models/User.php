<?php

declare(strict_types=1);

namespace app\models;

class User {
    public int $_id;
    public string $_nom;
    public string $_email;
    public string $_mdp_hash;

    public function __construct($id = null, $nom, $email, $mdp_hash) {
        $this->_id = $id;
        $this->_nom = $nom;
        $this->_email = $email;
        $this->_mdp_hash = $mdp_hash;
    }
}