<?php

namespace App\Services;

use App\Repositories\UserRepository;

class Validator
{

    public static function normalizeTelephone($tel)
    {
        return preg_replace('/\s+/', '', trim((string)$tel));
    }

    public static function validateRegister(array $input, UserRepository $repo = null)
    {
        $errors = [
            'nom' => '',
            'prenom' => '',
            'email' => '',
            'mdp' => '',
            'confirm_mdp' => '',
            'telephone' => ''
        ];

        $values = [
            'nom' => trim((string)($input['nom'] ?? '')),
            'prenom' => trim((string)($input['prenom'] ?? '')),
            'email' => trim((string)($input['email'] ?? '')),
            'telephone' => self::normalizeTelephone($input['telephone'] ?? ''),
        ];

        $mdp = (string)($input['mdp'] ?? '');
        $confirm  = (string)($input['confirm_mdp'] ?? '');

        if (mb_strlen($values['nom']) < 2) $errors['nom'] = "Le nom doit contenir au moins 2 caractères.";
        if (mb_strlen($values['prenom']) < 2) $errors['prenom'] = "Le prénom doit contenir au moins 2 caractères.";

        if ($values['email'] === '') $errors['email'] = "L'email est obligatoire.";
        elseif (!filter_var($values['email'], FILTER_VALIDATE_EMAIL))
            $errors['email'] = "L'email n'est pas valide (ex: nom@domaine.com).";

        if (strlen($mdp) < 8) $errors['mdp'] = "Le mot de passe doit contenir au moins 8 caractères.";

        if (strlen($confirm) < 8) $errors['confirm_mdp'] = "Veuillez confirmer le mot de passe (min 8 caractères).";
        elseif ($mdp !== $confirm) {
            $errors['confirm_mdp'] = "Les mots de passe ne correspondent pas.";
            if ($errors['mdp'] === '') $errors['mdp'] = "Vérifiez le mot de passe et sa confirmation.";
        }

        $tel = $values['telephone'];
        if (strlen($tel) < 8 || strlen($tel) > 15) $errors['telephone'] = "Le téléphone doit contenir entre 8 et 15 chiffres.";
        elseif (!preg_match('/^[0-9]+$/', $tel)) $errors['telephone'] = "Le téléphone ne doit contenir que des chiffres.";

        if ($repo && $errors['email'] === '' && $repo->emailExists($values['email'])) {
            $errors['email'] = "Cet email est déjà utilisé.";
        }

        $ok = true;
        foreach ($errors as $m) {
            if ($m !== '') {
                $ok = false;
                break;
            }
        }

        return ['ok' => $ok, 'errors' => $errors, 'values' => $values];
    }

    public static function validateLogin(array $input, UserRepository $repo) {
        $errors = [
            "email" => "",
            "mdp" => ""
        ];

        $values = [
            'email' => trim((string) ($input['email'] ?? '')),
            'mdp' => trim((string) ($input['mdp'] ?? '')),
        ];

        $user  = $repo->findByEmail($values['email']);

        if ($user == null) {
            $errors['email'] = "Auccun compte pour ce email !";
        }

        if (! password_verify($values['mdp'], PASSWORD_DEFAULT)) {
            $errors['mdp'] = "Mot de passe non conforme !";
        }

        $ok = true;

        foreach ($errors as $e) {
            if ($e !== "") {
                $ok = false;
            }
        }

        return ['ok' => $ok, 'errors' => $errors, 'values' => $values];
    }
}
