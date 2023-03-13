let expression = "";
let result = "";

function updateScreen() {
  document.querySelector(".expression").innerHTML = expression;
  document.querySelector(".result").innerHTML = result;
}

function clearScreen() {
  expression = "";
  result = "";
  updateScreen();
}

function appendToExpression(value) {
  expression += value;
  updateScreen();
}

function calculateResult() {
  try {
    result = eval(expression);
  } catch (e) {
    result = "Error";
  }
  updateScreen();
}

document.querySelectorAll(".key").forEach(function (button) {
  button.addEventListener("click", function () {
    switch (button.id) {
      case "clear":
        clearScreen();
        break;
      case "sign":
        appendToExpression("-");
        break;
      case "percent":
        appendToExpression("*0.01");
        break;
      case "add":
        appendToExpression("+");
        break;
      case "subtract":
        appendToExpression("-");
        break;
      case "multiply":
        appendToExpression("*");
        break;
      case "divide":
        appendToExpression("/");
        break;
      case "decimal":
        appendToExpression(".");
        break;
      case "equals":
        calculateResult();
        break;
      default:
        appendToExpression(button.innerHTML);
        break;
    }
  });
});

updateScreen();
