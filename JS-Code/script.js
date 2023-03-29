let expression = "";
let result = "a";

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

// //write two var and if statement with else
// var a = 0;
// var b = 0;
// if (a == b) {
//   document.querySelector("#result").innerHTML = "a = b";
//   } else {
//     document.querySelector("#result").innerHTML = "a < b";
//     }


var showButtons = document.querySelectorAll(".show-btn");

showButtons.forEach(function(button) {
  var table = document.getElementById(button.dataset.table);
  var isOpen = false;
  
  table.style.display = "none";
  
  button.addEventListener("click", function() {
    isOpen = !isOpen;
    
    if (isOpen) {
      table.style.display = "table";
      button.textContent = "Hide Table " + button.dataset.table.slice(-1);
    } else {
      table.style.display = "none";
      button.textContent = "Show Table " + button.dataset.table.slice(-1);
    }
  });
});
