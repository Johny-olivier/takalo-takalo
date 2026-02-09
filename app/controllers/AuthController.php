<?php

namespace App\Controllers;

use Flight;
use Throwable;
use app\services\Validator;
use app\services\UserService;
use app\repositories\UserRepository;

class AuthController
{

    public static function showRegister()
    {
        Flight::render('auth/register', [
            'values' => ['nom' => '', 'prenom' => '', 'email' => '', 'telephone' => ''],
            'errors' => ['nom' => '', 'prenom' => '', 'email' => '', 'mdp' => '', 'confirm_mdp' => '', 'telephone' => ''],
            'success' => false
        ]);
    }

    public static function validateRegisterAjax()
    {
        header('Content-Type: application/json; charset=utf-8');

        try {
            $pdo  = Flight::db();
            $repo = new UserRepository($pdo);

            $req = Flight::request();

            $input = [
                'nom' => $req->data->nom,
                'prenom' => $req->data->prenom,
                'email' => $req->data->email,
                'mdp' => $req->data->mdp,
                'confirm_mdp' => $req->data->confirm_mdp,
                'telephone' => $req->data->telephone,
            ];

            $res = Validator::validateRegister($input, $repo);

            Flight::json([
                'ok' => $res['ok'],
                'errors' => $res['errors'],
                'values' => $res['values'],
            ]);
        } catch (Throwable $e) {
            http_response_code(500);
            Flight::json([
                'ok' => false,
                'errors' => ['_global' => 'Erreur serveur lors de la validation : ' . $e->getMessage()],
                'values' => []
            ]);
        }
    }

    public static function postRegister()
    {
        $pdo  = Flight::db();
        $repo = new UserRepository($pdo);
        $svc  = new UserService($repo);

        $req = Flight::request();

        $input = [
            'nom' => $req->data->nom,
            'prenom' => $req->data->prenom,
            'email' => $req->data->email,
            'mdp' => $req->data->mdp,
            'confirm_mdp' => $req->data->confirm_mdp,
            'telephone' => $req->data->telephone,
        ];

        $res = Validator::validateRegister($input, $repo);

        if ($res['ok']) {
            $svc->register($res['values'], (string)$input['mdp']);
            Flight::render('auth/register', [
                'values' => ['nom' => '', 'prenom' => '', 'email' => '', 'telephone' => ''],
                'errors' => ['nom' => '', 'prenom' => '', 'email' => '', 'mdp' => '', 'confirm_mdp' => '', 'telephone' => ''],
                'success' => true
            ]);
            return;
        }

        Flight::render('auth/register', [
            'values' => $res['values'],
            'errors' => $res['errors'],
            'success' => false
        ]);
    }

    // login
    public static function postLogin() {
        $pdo  = Flight::db();
        $repo = new UserRepository($pdo);
        $svc  = new UserService($repo);

        $req = Flight::request();

        $input = [
            'email' => $req->data->email,
            'mdp' => $req->data->mdp,
        ];

        $res = Validator::validateLogin($input, $repo);

        if ($res['ok']) {
            Flight::render('home/index');
            return;  
        }

        Flight::render('auth/login', [
            'values' => $res['values'],
            'errors' => $res['errors'],
            'success' => false
        ]);
    }
}
