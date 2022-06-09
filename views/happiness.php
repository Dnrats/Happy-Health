<?php include "./views/header.php" ?>

    <main>
      <section>
        <section class="top-section">
            <div class="div-text">
                <h2>Discover <span>Happiness</span> score and <span>Health</span> score <span>(life expectancy)</span> since 2015 in every country all around the world!</h2>
                <p><strong>Happiness</strong> scored according to GDP per Capita, Family, <strong>Life Expectancy</strong>, Freedom, Generosity, Trust Government Corruption describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
                <button class="button-happiness">Happiness</button>
                <button class="button-health">Health</button>
            </div>
            <div class="div-image"></div>
                <img src="./assets/right_image.svg" alt="Image with the map of the world and stats">
            </div>

        </section>
        <section class="container-canvas-carousel">

          <section class="chart">

          </section>
          <section class="right-carousel">
        <section class="double-carousel">
          <div class="first-carousel canvas-page2">
            <h2>Happiness Score per country</h2>
            <select class="happy-page2" name="country" id="selectCountry">
              <option value="Brazil">Brazil</option>
              <option value="France">France</option>
            </select>
            <div >
              <canvas id="myChart"></canvas>
            </div>
          </div>


          <div class="secondary-carousel">
            <div class="trophy">
              <i id="logo-trophy" class="fa-solid fa-trophy"></i>
            </div>
            <h2 class="happy-page2">Champion of Health</h2>
            <div class="slider-container">
              <!-- carousel 1  -->
              <div class="cc">
                <div class="slider" data-active="true">
                  <img id="imgChampion1" src="./assets/image.webp" alt="" />
                  <div class="stats">
                    <h3 id="countryName1" class="happy-page2">France</h3>
                    <p id="valMax1" class="happy-page2">7.6</p>
                  </div>
                </div>
              </div>

              <!-- carousel 2 -->
            </div>
            <div class="navigation">
              <i id="left-2" class="fa-solid fa-arrow-left-long"></i>
              <div>
                <p id="year1" class="year happy-page2">2022</p>
              </div>
              <i id="right-2" class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </section>
        <section class="advice-generator">
          <div class="advice-container">

          </div>
        </section>
        </section>
      </section>
      </section>
    </main>

  <?php include "./views/footer.php" ?>

  <script src="./js/championAjax_happiness.js"></script>
  <script src="./js/graph_happi_country.js"></script>
</body>
</html>