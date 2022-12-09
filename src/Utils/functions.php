<?php

/**
 * Méthode échappant les caractères html dans $message
 * @param string $message chaîne à échapper
 * @return string chaîne échappée
 */
function e($message)
{
    return htmlspecialchars($message, ENT_QUOTES);
}

/**
 * Méthode permettant de hasher un mot de passe avec l'algorithme ARGON2ID
 * @param string $pass mot de passe à hasher
 * @return string chaîne hashée
 */
function hash_pass(string $pass)
{
    return password_hash($pass, PASSWORD_ARGON2ID);
}

function is_valid_email(string $email)
{
    if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", strtolower($email))){
        return true;
    }
    return false;
}
