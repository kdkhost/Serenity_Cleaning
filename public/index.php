<?php
/**
 * Ponto de entrada da aplicação Serenity Cleaning
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use Serenity\Controllers\HomeController;

// Carregar variáveis de ambiente
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

// Configurar tratamento de erros
if ($_ENV['APP_DEBUG'] ?? false) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// Router básico
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Remover query string da URI
$uri = parse_url($requestUri, PHP_URL_PATH);

// Roteamento simples
switch ($uri) {
    case '/':
    case '/home':
        $controller = new HomeController();
        $controller->index();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada";
        break;
}
