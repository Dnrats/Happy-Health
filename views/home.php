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
      <div class="champions-div">
        <div class="champion-of-happiness"></div>
        <div class="champion-of-health"></div>
      </div>
      <div class="advice-generator">
        <h1 class="numAdvice">Helo</h1>
        <div class="out-text">Lorem ipsum</div>
        <div class="line">
          <hr/>
          <img src="./assets/citation.svg" alt="" />
          <hr/>
        </div>
        <div class="newGen">
          <i class="fa-solid fa-shuffle"></i>
        </div>
      </div>
    </section>
  </main>
<?php include "./views/footer.php" ?>   
<script src="./js/citation.js"></script>
<script src="./js/graphHome.js"></script>
<script src="./js/championAjax.js"></script>
</body>
</html>