function advice(id) {
  let url = `https://api.adviceslip.com/advice/${id}`;
  fetch(url).then((response) =>
    response.json().then((data) => {
      document.querySelector(".numAdvice").firstChild.nodeValue = "ADVICE #" + data.slip.id;
      document.querySelector(".out-text").firstChild.nodeValue = `" ${data.slip.advice} "`;
    })
  );
}
advice(Math.floor(Math.random() * 224));

const btnAdvice = document.querySelector(".newGen");
btnAdvice.addEventListener("click", function () {
  advice(Math.floor(Math.random() * 224));
});
