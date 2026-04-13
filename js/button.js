const buttons = document.querySelectorAll(".button-effect");

buttons.forEach((button) => {
  button.addEventListener("mouseover", (e) => {
    let pointHor = e.pageX - button.offsetLeft;
    let pointVer = e.pageY - button.offsetTop;

    button.style.setProperty("--leftValue", pointHor + "px");
    button.style.setProperty("--topValue", pointVer + "px");
    console.log(pointHor, pointVer);
    console.log(button);
  });
});
