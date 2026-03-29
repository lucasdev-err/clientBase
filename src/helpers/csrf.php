<?php 
function csrfGenerate(): string 
{
    if (empty($_SESSION['csrfToken'])){
        $_SESSION['csrfToken'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrfToken'];
}

function csrfValidate(): void 
{
    $tokenSession = $_SESSION['csrfToken'] ?? '';
    $tokenPost = $_POST['csrfToken'] ?? '';

    if (empty($tokenSession) || !hash_equals($tokenSession, $tokenPost)){
        http_response_code(403);
        die('Invalid CSRF token.');
    }
}

?>