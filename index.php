
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-icShn41n5smxGVW4/Is/O+Eih0Ug1PtWp/7KlQVqpGZwZ6hBEXIh9PGSRPq2l3NNkzFFXtLIUd86He91rrbV8Q==" crossorigin="anonymous" />
    <title>mercado 24hr</title>
   
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="rectangle bg-primary"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img class="logo" src="style/files/newlogo.png" alt="logo site"> 
                    </div>
                    <div class="col">
                        <h1>Mercado 24 Horas</h1>
                    </div>
                    <div class="col">
                        <nav>
                            <ul>
                                <li><a href="#">Página Inicial</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col">
                        <div class="search-container" id="searchContainer">
                          <img src="style/files/lupa.png" alt="Lupa" id="searchIcon">
                            <input type="text" id="searchInput" placeholder="Pesquisar...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">
        <!-- Conteúdo -->
    </div>

    <script>
        document.getElementById('searchIcon').addEventListener('mouseenter', function() {
            document.getElementById('searchInput').classList.add('expanded');
        });

        document.getElementById('searchContainer').addEventListener('mouseleave', function() {
            document.getElementById('searchInput').classList.remove('expanded');
        });
    </script>
</body>
</html>





<!-- aqui para baixo e conteudo -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="style/files/example1.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="style/files/example2.jpg" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="style/files/example3.jpg" class="d-block w-100" alt="img3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="container_produtos">
        <div class="produtos">
            
        <div class="prod">
        <img src="style/files/example1.jpg" alt="ovos">
        <p>kjashdjklah</p>
        </div>

        <div class="prod">
        <img src="style/files/example1.jpg" alt="sucrilhos">
        <p>aujsghdjkladsa</p>
        </div>

        <div class="prod">
        <img src="style/files/example1.jpg" alt="nescau">
        <p>ajghsdjkahsd</p>
        </div>

        <div class="prod">
        <img src="style/files/example1.jpg" alt="katchup">
        <p>kayhsdjkahsd</p>
        </div>
        
        </div>
    </div>


</body>
</html>