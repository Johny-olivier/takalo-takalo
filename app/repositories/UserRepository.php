<?php

namespace app\repositories;

use PDO;
use app\models\User;

class UserRepository
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function emailExists($email)
    {
        $st = $this->pdo->prepare("SELECT 1 FROM users WHERE email=? LIMIT 1");
        $st->execute([(string)$email]);
        return (bool)$st->fetchColumn();
    }

    // public function userExists($email, $mdp_hash) {
    //     $st = $this->pdo->prepare("SELECT 1 FROM users WHERE email = ? AND mdp_hash = ? LIMIT 1");
    //     $st->execute([(string)$email, (string)$mdp_hash]);
    //     return (bool)$st->fetchColumn();
    // }

    public function create($nom, $prenom, $email, $hash, $telephone)
    {
        $st = $this->pdo->prepare("INSERT INTO users(nom, prenom, email, password_hash, telephone)
                                                VALUES(?,?,?,?,?)");
        $st->execute([(string)$nom, (string)$prenom, (string)$email, (string)$hash, (string)$telephone]);
        return $this->pdo->lastInsertId();
    }

    /**
     * get all users
     * @return User[]
     */
    public function findAll() : array {
        $st = $this->pdo->prepare("SELECT * FROM users");
        $st->execute();
        return $st->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    /**
     * get un user by id
     * @return User
     */
    public function findById(int $id) : User {
        $st = $this->pdo->prepare("SELECT * FROM users where id = ?");
        $st->execute([$id]);
        $st->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $st->fetch();
    }

    /**
     * get un user email
     * @return User
     */
    public function findByEmail(string $email) : User {
        $st = $this->pdo->prepare("SELECT * FROM users where email = ?");
        $st->execute([$email]);
        $st->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $st->fetch();
        return $user ?: null;
    }
}
