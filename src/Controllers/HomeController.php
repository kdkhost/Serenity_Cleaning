<?php

namespace Serenity\Controllers;

use Serenity\Services\CleaningService;

class HomeController
{
    private CleaningService $cleaningService;

    public function __construct()
    {
        $this->cleaningService = new CleaningService();
    }

    public function index(): void
    {
        $services = $this->cleaningService->getAllServices();
        
        // Por enquanto, renderizar uma resposta simples
        $this->render('home', ['services' => $services]);
    }

    private function render(string $view, array $data = []): void
    {
        extract($data);
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "<h1>Serenity Cleaning</h1>";
            echo "<p>Bem-vindo ao sistema de gerenciamento de limpeza domiciliar</p>";
            if (isset($services)) {
                echo "<h2>Serviços Disponíveis:</h2>";
                echo "<ul>";
                foreach ($services as $service) {
                    echo "<li>{$service['name']} - R$ {$service['price']}</li>";
                }
                echo "</ul>";
            }
        }
    }
}
