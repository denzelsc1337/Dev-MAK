(() => {
  var resume_Casa = [];

  const casa = document.getElementById("1"); //CASA
  const inputsCasa = casa.querySelectorAll("input");

  console.log(inputsCasa);
  inputsCasa.forEach((element) => {
    console.log(element.getAttribute("id"));
  });
})();
