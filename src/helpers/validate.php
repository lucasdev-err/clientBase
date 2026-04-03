<?php 

function validateText(string $text, int $strLen): bool
{
    if(empty($text) || mb_strlen($text) > $strLen){
        return false;
    }
    return true;
}

function validateName(string $name): bool
{
    return validateText($name, 255);
}

function validateAge(string $age): bool
{
    $validAge = filter_var($age, FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 1, 'max_range' => 120]
    ]);
    if($validAge === false){
        return false;
    }
    return true;
}

function validateEmail(string $email): bool
{
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($validEmail === false || mb_strlen($email) > 255){
        return false;
    }

    return true;
}

function validateStreet(string $street): bool
{
    return validateText($street, 255);
}

function validateNeighborhood(string $neighborhood): bool
{
    return validateText($neighborhood, 255);
}

function validateCity(string $city): bool
{
    return validateText($city, 255);
}

?>