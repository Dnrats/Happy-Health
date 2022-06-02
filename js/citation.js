function advice() {
  let url = "https://api.adviceslip.com/advice";
  fetch(url).then((response) =>
    response.json().then((data) => {
      //console.log(data);
      document.querySelector(".numAdvice").firstChild.nodeValue =
        "ADVICE #" + data.slip.id;
      document.querySelector(".out-text").firstChild.nodeValue =
        ` " ${data.slip.advice} " `;
    })
  );
}
advice();

const btnAdvice = document.querySelector(".newGen");
btnAdvice.addEventListener("click", function () {
  advice();
});
