let day = prompt("Enter day number (1-7): ");

switch (day) {
  case "1":
    document.body.innerHTML=("Sunday");
    break;
  case "2":
    document.body.innerHTML=("Monday");
    break;
  case "3":
    document.body.innerHTML=("Tuesday");
    break;
  case "4":
    document.body.innerHTML=("Wednesday");
    break;
  case "5":
    document.body.innerHTML=("Thursday");
    break;
  case "6":
    document.body.innerHTML=("Friday");
    break;
  case "7":
    document.body.innerHTML=("Saturday");
    break;
  default:
    document.body.innerHTML=("Invalied day number");
}