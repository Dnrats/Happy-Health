<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary Meta Tags -->
    <title>Happy Health</title>
    <meta name="title" content="Happy Health">
    <meta name="description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="https://happy-health.com/"> -->
    <meta property="og:title" content="Happy Health">
    <meta property="og:description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">
    <meta property="og:image" content="logoHappy.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <!-- <meta property="twitter:url" content="https://happy-health.com/"> -->
    <meta property="twitter:title" content="Happy Health">
    <meta property="twitter:description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">
    <meta property="twitter:image" content="logoHappy.png">

    <!-- Links / Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <title>Happy - Health</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./css/assets/images/icon.png" type="image/x-icon">
  </head>
  <body>
    <header>
      <div class="nav-container">
        <!-- Logo & title -->
        <img src="./assets/logo.svg" alt="" />
        <nav>
          <ul>
            <li><a class="happy" href="#">Happy</a></li>
            <li><a class="health" href="#">Health</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
        <section class="top-section">
            <div class="div-text">
                <h2>Discover <span>Happiness</span> score and <span>Health</span> score <span>(life expectancy)</span> since 2015 in every country all around the world!</h2>
                <p><strong>Happiness</strong> scored according to GDP per Capita, Family, <strong>Life Expectancy</strong>, Freedom, Generosity, Trust Government Corruption describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
                <button class="button-happiness">Happiness</button>
                <button class="button-health">Health</button>
            </div>
            <div class="div-image">
                <img src="./assets/right_image.svg" alt="Image with the map of the world and stats">
            </div>
        </section>
        <section class="container-canvas-carousel">
          <div class="chart">
              <canvas id="myChart"></canvas>
          </div>
          <section class="right-carousel">
        <section class="double-carousel">
          <div class="first-carousel">
            <div class="trophy">
              <i id="logo-trophy" class="fa-solid fa-trophy"></i>
            </div>
            <h2>Champion of Happiness</h2>
            <div class="slider-container">
              <!-- carousel 1  -->
              <div class="cc">
                <div class="slider "  data-active="true">
                  <img src="./assets/image.webp" alt="" />
                  <div class="stats">
                    <h3>France</h3>
                    <p>7.6</p>
                  </div>
                </div>

                <div class="slider"  data-active="false">
                <img src="./assets/image.webp" alt="" />
                <div class="stats">
                  <h3>Test</h3>
                  <p>7.6</p>
                </div>
              </div>

              <div class="slider" data-active="false">
                <img src="./assets/image.webp" alt="" />
                <div class="stats">
                  <h3>Test2</h3>
                  <p>7.6</p>
                </div>
              </div>
              </div>

              <!-- carousel 2 -->
            </div>
            <div class="navigation">
              <i id="left" class="fa-solid fa-arrow-left-long"></i>
              <div>
                <p class="year">2022</p>
              </div>
              <i id="right" class="fa-solid fa-arrow-right"></i>
            </div>
          </div>

          <div class="secondary-carousel">
            <div class="trophy">
              <i id="logo-trophy-green" class="fa-solid fa-trophy"></i>
            </div>
            <h2>Champion of Health</h2>
            <div class="slider-container">
              <!-- carousel 1  -->
              <div class="cc">
                <div class="slider" data-active="true">
                  <img src="./assets/image.webp" alt="" />
                  <div class="stats">
                    <h3>France</h3>
                    <p>7.6</p>
                  </div>
                </div>

                <div class="slider" data-active="false">
                <img src="./assets/image.webp" alt="" />
                <div class="stats">
                  <h3>Test</h3>
                  <p>7.6</p>
                </div>
              </div>

              <div class="slider" data-active="false">
                <img src="./assets/image.webp" alt="" />
                <div class="stats">
                  <h3>Test2</h3>
                  <p>7.6</p>
                </div>
              </div>
              </div>

              <!-- carousel 2 -->
            </div>
            <div class="navigation">
              <i id="left-2" class="fa-solid fa-arrow-left-long"></i>
              <div>
                <p class="year">2022</p>
              </div>
              <i id="right-2" class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </section>
        <section class="advice-generator">
          <div class="advice-container">
            <h1 class="numAdvice">Helo</h1>
            <div class="out-text">
              " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum!
              "
            </div>
            <div class="line">
              <hr />
              <img src="./assets/citation.svg" alt="" />
              <hr />
            </div>
            <div class="newGen">
              <i class="fa-solid fa-shuffle"></i>
            </div>
          </div>
        </section>
        </section>
      </section>
      </section>
    </main>
    <footer>
      <hr />
      <p>
        &copy; 2022 Floriane Simmet - Made with
        <i class="fa-solid fa-heart"></i>
      </p>
    </footer>
    <script src="./js/citation.js"></script>
    <script src="./js/graph.js"></script>
    <script src="./dist/main.js"></script>
  </body>
</html>
