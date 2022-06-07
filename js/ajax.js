function apiCall(selectYear) {

    const form = new FormData();
    form.append("selectYear", selectYear)

    fetch("./models/champion_happiness.php", {
        method: "POST",
        body: form
    })
    .then((response) => {
        return response.json();   
    }).then((data) => {
        document.querySelector('#countryName').firstChild.nodeValue = data.name_country;
        document.querySelector('#valMax').firstChild.nodeValue = data.valMax;
        document.querySelector('#year').firstChild.nodeValue = data.year;
        document.querySelector('#imgChampion').src = `https://countryflagsapi.com/png/${data.name_country}`;
        document.querySelector('#imgChampion').alt = `flag from ${data.name_country}`;
    });
}
apiCall(2019);

const tabYear = [2015,2016,2017,2018,2019,2020,2021,2022];
let countYear = 4;

const btnHappyRight = document.querySelector('#right');
btnHappyRight.addEventListener('click', function(){
    if (countYear === 7) {
        countYear = 0;
        apiCall(tabYear[countYear]);
    }else{
        countYear ++;
        apiCall(tabYear[countYear]);
    }
})

const btnHappyLeft = document.querySelector('#left');
btnHappyLeft.addEventListener('click', function(){
    if (countYear === 0) {
        countYear = 7;
        apiCall(tabYear[countYear]);
    }else{
        countYear --;
        apiCall(tabYear[countYear]);
    }
})