function advice() {
    let url = 'https://api.adviceslip.com/advice';
    fetch(url)
    .then((response) => response.json()
    .then((data) => {
        //console.log(data);
        document.querySelector('#titleAdvice').firstChild.nodeValue = "ADVICE #" + data.slip.id;
        document.querySelector('#advice').firstChild.nodeValue = data.slip.advice;
    }))
}
advice();

const btnAdvice = document.querySelector('#btnAdvice');
btnAdvice.addEventListener('click', function(){
    advice();
})