<?php include "./views/header.php" ?>
    
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

<?php include "./views/footer.php" ?>
