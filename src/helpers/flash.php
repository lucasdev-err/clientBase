<?php 

function setFlash(string $message, string $type): void
{
    if(!in_array($type, ['success', 'error'])){
        throw new \InvalidArgumentException();
    }
    $_SESSION['flash'] = ['text' => $message, 'type' => $type];
}

function getFlash(): array|null
{
    if(isset($_SESSION['flash'])){
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

?>