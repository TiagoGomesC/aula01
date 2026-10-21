
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes em Cartaz</title>
</head>
<body>
    <?php require_once __DIR__ . '/includes/header.php'; ?>
<style>
        /* Estilos para alinhar o layout conforme o protótipo */
        .user-tags {
            display: flex;
            justify-content: space-around;
            padding: 25px 20px 15px 20px;
        }

        .tag {
            border: 1px solid #5c1860;
            padding: 4px 25px;
            border-radius: 20px;
            color: #5c1860;
            font-size: 1.1rem;
            background-color: #fff;
        }

        .movies-section {
            background-color: #eef2f5;
            margin: 0 20px 20px 20px;
            padding: 20px 10px;
            border-radius: 12px;
        }

        .movies-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .movie-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Estilo para ajustar os vídeos no tamanho exato do card do protótipo */
        .movie-card iframe {
            width: 100%;
            max-width: 180px;
            height: 230px;
            border-radius: 6px;
            border: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .movie-card a {
            margin-top: 10px;
            color: #111;
            text-decoration: underline;
            font-size: 1.05rem;
            font-weight: 500;
        }

        .movie-card a:hover {
            color: #5c1860;
        }

        @media (max-width: 768px) {
            .movies-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }
    </style>
</head>
<body>

<?php require_once __DIR__ . '/includes/header.php'; ?>

    <!-- Nomes em destaque conforme o protótipo -->
    <div class="user-tags">
        <span class="tag">Tiago</span>
        <span class="tag">Lopes</span>
        <span class="tag">Teresa</span>
        <span class="tag">Mirela</span>
    </div>

    <!-- Seção de Filmes com Vídeos Incorporados (Iframe) -->
    <div class="movies-section">
        <div class="movies-grid">

            <!-- Filme 1: Os Testamentos -->
            <div class="movie-card">
                <iframe 
                    src="https://www.youtube.com/embed/S8d1E-YOAJk" 
                    title="Os testamentos" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <a href="https://www.youtube.com/watch?v=S8d1E-YOAJk" target="_blank" rel="noopener noreferrer">Os testamentos</a>
            </div>

            <!-- Filme 2: Homem Aranha -->
            <div class="movie-card">
                <iframe 
                    src="https://www.youtube.com/embed/CyiiEJRZjSU" 
                    title="Homem aranha" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <a href="https://www.youtube.com/watch?v=CyiiEJRZjSU" target="_blank" rel="noopener noreferrer">Homem aranha</a>
            </div>

            <!-- Filme 3: Sobrenatural -->
            <div class="movie-card">
                <iframe 
                    src="https://www.youtube.com/embed/L8GzoyjEgwI" 
                    title="Sobrenatural" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <a href="https://www.youtube.com/watch?v=L8GzoyjEgwI" target="_blank" rel="noopener noreferrer">Sobrenatural</a>
            </div>

            <!-- Filme 4: Harry Potter -->
            <div class="movie-card">
                <iframe 
                    src="https://www.youtube.com/embed/9fIObnIGMlI" 
                    title="Harry Potter" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <a href="https://www.youtube.com/watch?v=9fIObnIGMlI" target="_blank" rel="noopener noreferrer">Harry Potter</a>
            </div>

        </div>
    </div>

</body>
</body>
</html>