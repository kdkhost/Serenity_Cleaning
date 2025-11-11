# Serenity Cleaning
Sistema de Gerenciamento de Serviços de Limpeza Domiciliar

## 🧹 Sobre o Projeto

Serenity Cleaning é um sistema moderno e eficiente para gerenciamento de serviços de limpeza domiciliar. O sistema oferece uma interface intuitiva para visualização e gestão de serviços de limpeza.

## ✨ Funcionalidades

- ✅ Catálogo de serviços de limpeza
- ✅ Cálculo automático de preços baseado em área
- ✅ Interface moderna e responsiva
- ✅ Arquitetura MVC limpa e organizada
- ✅ Testes automatizados

## 🛠️ Tecnologias

- **PHP 8.0+**: Linguagem de programação
- **Composer**: Gerenciador de dependências
- **PHPUnit**: Framework de testes
- **Twig**: Engine de templates
- **Monolog**: Sistema de logs
- **DotEnv**: Gerenciamento de variáveis de ambiente

## 📋 Requisitos

- PHP >= 8.0
- Composer
- Apache/Nginx com mod_rewrite habilitado
- MySQL 5.7+ ou MariaDB 10.2+ (opcional)

## 🚀 Instalação

1. **Clone o repositório:**
```bash
git clone https://github.com/kdkhost/Serenity_Cleaning.git
cd Serenity_Cleaning
```

2. **Instale as dependências:**
```bash
composer install
```

3. **Configure as variáveis de ambiente:**
```bash
cp .env.example .env
# Edite o arquivo .env com suas configurações
```

4. **Configure o servidor web:**

Para Apache, aponte o DocumentRoot para a pasta `public/`.

Para desenvolvimento rápido, use o servidor embutido do PHP:
```bash
php -S localhost:8000 -t public/
```

5. **Acesse o sistema:**
```
http://localhost:8000
```

## 📁 Estrutura do Projeto

```
/
├── config/             # Arquivos de configuração
├── public/             # Ponto de entrada público
│   ├── index.php      # Front controller
│   └── .htaccess      # Configuração Apache
├── src/               # Código fonte
│   ├── Controllers/   # Controladores MVC
│   ├── Models/        # Modelos de dados
│   ├── Services/      # Lógica de negócio
│   └── Views/         # Templates
├── tests/             # Testes automatizados
├── vendor/            # Dependências (ignorado no git)
├── .env.example       # Exemplo de variáveis de ambiente
├── .gitignore         # Arquivos ignorados pelo git
├── composer.json      # Dependências do projeto
└── README.md          # Este arquivo
```

## 🧪 Testes

Execute os testes automatizados:

```bash
composer test
```

Verificar padrões de código:

```bash
composer cs
```

Corrigir automaticamente padrões de código:

```bash
composer cs-fix
```

## 📦 Serviços Disponíveis

1. **Limpeza Básica** - R$ 150,00
   - Limpeza geral de ambientes
   - Duração: 2-3 horas

2. **Limpeza Profunda** - R$ 300,00
   - Limpeza detalhada incluindo áreas difíceis
   - Duração: 4-6 horas

3. **Limpeza Pós-Obra** - R$ 500,00
   - Limpeza especializada após reformas
   - Duração: 6-8 horas

## 🔧 Desenvolvimento

### Adicionando um novo serviço

1. Edite o método `getAllServices()` em `src/Services/CleaningService.php`
2. Adicione os dados do novo serviço no array retornado
3. Execute os testes para garantir que tudo funciona

### Criando novos controladores

1. Crie uma nova classe em `src/Controllers/`
2. Estenda a funcionalidade básica conforme necessário
3. Adicione as rotas correspondentes em `public/index.php`

## 🤝 Contribuindo

Contribuições são bem-vindas! Por favor:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

## 👥 Autores

- **Equipe Serenity** - [GitHub](https://github.com/kdkhost)

## 📞 Suporte

Para suporte, envie um email para suporte@serenitycleaning.com ou abra uma issue no GitHub.

---

Feito com ❤️ pela equipe Serenity Cleaning
