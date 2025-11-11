<?php

namespace Serenity\Services;

use Serenity\Models\Service;

class CleaningService
{
    /**
     * Retorna todos os serviços de limpeza disponíveis
     *
     * @return array
     */
    public function getAllServices(): array
    {
        // Dados mockados - em produção, isso viria do banco de dados
        return [
            [
                'id' => 1,
                'name' => 'Limpeza Básica',
                'description' => 'Limpeza geral de ambientes',
                'price' => 150.00,
                'duration' => '2-3 horas'
            ],
            [
                'id' => 2,
                'name' => 'Limpeza Profunda',
                'description' => 'Limpeza detalhada incluindo áreas difíceis',
                'price' => 300.00,
                'duration' => '4-6 horas'
            ],
            [
                'id' => 3,
                'name' => 'Limpeza Pós-Obra',
                'description' => 'Limpeza especializada após reformas',
                'price' => 500.00,
                'duration' => '6-8 horas'
            ]
        ];
    }

    /**
     * Busca um serviço específico por ID
     *
     * @param int $id
     * @return array|null
     */
    public function getServiceById(int $id): ?array
    {
        $services = $this->getAllServices();
        
        foreach ($services as $service) {
            if ($service['id'] === $id) {
                return $service;
            }
        }
        
        return null;
    }

    /**
     * Calcula o preço total baseado no serviço e área
     *
     * @param int $serviceId
     * @param float $area
     * @return float|null
     */
    public function calculatePrice(int $serviceId, float $area): ?float
    {
        $service = $this->getServiceById($serviceId);
        
        if (!$service) {
            return null;
        }
        
        // Cálculo simples: preço base + (área * fator)
        $baseFactor = 2.0;
        return $service['price'] + ($area * $baseFactor);
    }
}
