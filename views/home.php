<?php include "./views/header.php" ?>
    
    <main>
        <section class="top-section">
            <div class="div-text">
                <h2>Discover <span>Happiness</span> score and <span>Health</span> score <span>(life expectancy)</span> since 2015 in every country all around the world!</h2>
                <p><strong>Happiness</strong> scored according to GDP per Capita, Family, <strong>Life Expectancy</strong>, Freedom, Generosity, Trust Government Corruption describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
                <div id="div-for-buttons">
                  <a href="happiness" class="button-happiness">Happiness</a>
                  <a href="health" class="button-health">Health</a>
                </div>
            </div>
            <div class="div-image">
                <img src="./assets/right_image.svg" alt="Image with the map of the world and stats">
            </div>
        </section>
        <section class="bottom-section">
          <div class="background-div-chart">
            <div class="chart">
              <canvas id="myChart"></canvas>
            </div>
          </div>
          
              <!-- carousel 1  -->
              <div class="cc">
                <div class="slider" data-active="true">
                  <img id="imgChampion1" src="./assets/image.webp" alt="" />
                  <div class="stats">
                    <h3 id="countryName1">France</h3>
                    <p id="valMax1">7.6</p>
                  </div>
                </div>
              </div>

              <!-- carousel 2 -->
            <div class="navigation">
              <i id="left" class="fa-solid fa-arrow-left-long"></i>
              <div>
                <p id="year1" class="year">2022</p>
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
             
        </section>
    </main>

    <?php include "./views/footer.php" ?>
    
<script src="./js/citation.js"></script>
    <script src="./js/graphHome.js"></script>
    <script src="./js/championAjax.js"></script>
  </body>
</html>