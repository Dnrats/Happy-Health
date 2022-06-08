/* Fonction pour appeler le model de Champion of Happiness / Health */
function apiCall(url, nbr, selectYear) {

    const form = new FormData();
    form.append("selectYear", selectYear)

    fetch(url, {
        method: "POST",
        body: form
    })
    .then((response) => {
        return response.json();   
    }).then((data) => {
        document.querySelector(`#valMax${nbr}`).firstChild.nodeValue = data.valMax;
        document.querySelector(`#year${nbr}`).firstChild.nodeValue = data.year;
        if (data.name_country == "Hong Kong S.A.R. of China") {
            document.querySelector(`#countryName${nbr}`).firstChild.nodeValue = "Hong Kong";
            document.querySelector(`#imgChampion${nbr}`).src = `https://countryflagsapi.com/png/hong kong`;
            document.querySelector(`#imgChampion${nbr}`).alt = `flag from hong kong`;            
        }else{
            document.querySelector(`#countryName${nbr}`).firstChild.nodeValue = data.name_country;
            document.querySelector(`#imgChampion${nbr}`).src = `https://countryflagsapi.com/png/${data.name_country}`;
            document.querySelector(`#imgChampion${nbr}`).alt = `flag from ${data.name_country}`; 
        }
    });
}

/* Champion of Health */
/* Affichage au chargement */
apiCall("./models/champion_happiness.php", 1, 2019);

const tabYear1 = [2015,2016,2017,2018,2019,2020,2021,2022];
let countYear1 = 4;

/* Btn Right */
const btnHappyRight1 = document.querySelector('#right');
btnHappyRight1.addEventListener('click', function(){
    if (countYear1 === 7) {
        countYear1 = 0;
        apiCall("./models/champion_happiness.php", 1, tabYear1[countYear1]);
    }else{
        countYear1 ++;
        apiCall("./models/champion_happiness.php", 1, tabYear1[countYear1]);
    }
})

/* Btn Left */
const btnHappyLeft1 = document.querySelector('#left');
btnHappyLeft1.addEventListener('click', function(){
    if (countYear1 === 0) {
        countYear1 = 7;
        apiCall("./models/champion_happiness.php", 1, tabYear1[countYear1]);
    }else{
        countYear1 --;
        apiCall("./models/champion_happiness.php", 1, tabYear1[countYear1]);
    }
})


/* Champion of Health */
/* Affichage au chargement */
apiCall("./models/champion_health.php", 2, 2019);

const tabYear2 = [2015,2016,2017,2018,2019,2020,2021,2022];
let countYear2 = 4;

/* Btn Right */
const btnHappyRight2 = document.querySelector('#right-2');
btnHappyRight2.addEventListener('click', function(){
    if (countYear2 === 7) {
        countYear2 = 0;
        apiCall("./models/champion_health.php", 2, tabYear2[countYear2]);
    }else{
        countYear2 ++;
        apiCall("./models/champion_health.php", 2, tabYear2[countYear2]);
    }
})

/* Btn Left */
const btnHappyLeft2 = document.querySelector('#left-2');
btnHappyLeft2.addEventListener('click', function(){
    if (countYear2 === 0) {
        countYear2 = 7;
        apiCall("./models/champion_health.php", 2, tabYear2[countYear2]);
    }else{
        countYear2 --;
        apiCall("./models/champion_health.php", 2, tabYear2[countYear2]);
    }
})