let t = 0;

function ouioui() {
  const next = document.querySelector(".fa-arrow-right");
  const prev = document.querySelector(".fa-arrow-left-long");

  const allCarousel = document.querySelectorAll(".slider");
  const all = allCarousel.length;
  t = next.addEventListener("click", () => {
    all++;
  });

  allCarousel.forEach((element) => {});

  next.addEventListener("click", () => {
    for (let i = 0; i < allCarousel.length; i++) {
      const item = allCarousel[i];

      // if (item.classList.contains("active")) {
      //   item.classList.remove("active");
      // } else {
      //   item.classList.add("active");
      // }

      //   console.log(item.nextElementSibling.className.add("active"));
    }
  });
}

num = 0;

(function test() {
  const next = document.querySelector(".fa-arrow-right");
  const prev = document.querySelector(".fa-arrow-left-long");
  const allCarousel = document.querySelectorAll(".slider");

  next.addEventListener("click", () => {
    for (let i = 0; i < allCarousel.length; i++) {
      const el = allCarousel[i];

      console.log(el.nextElementSibling);
    }
  });
})();
