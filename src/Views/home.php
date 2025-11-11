<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity Cleaning - Serviços de Limpeza Domiciliar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 10px;
            font-size: 3em;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
            font-size: 1.2em;
        }
        
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .service-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .service-card h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.8em;
        }
        
        .service-card p {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .price {
            font-size: 2em;
            color: #764ba2;
            font-weight: bold;
            margin: 15px 0;
        }
        
        .duration {
            color: #888;
            font-style: italic;
        }
        
        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ Serenity Cleaning</h1>
        <p class="subtitle">Serviços de Limpeza Domiciliar com Excelência</p>
        
        <div class="services">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <h3><?= htmlspecialchars($service['name']) ?></h3>
                    <p><?= htmlspecialchars($service['description']) ?></p>
                    <div class="price">R$ <?= number_format($service['price'], 2, ',', '.') ?></div>
                    <div class="duration">⏱️ Duração: <?= htmlspecialchars($service['duration']) ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="footer">
            <p>© 2025 Serenity Cleaning - Todos os direitos reservados</p>
            <p>Sistema de Gerenciamento v1.0</p>
        </div>
    </div>
</body>
</html>
