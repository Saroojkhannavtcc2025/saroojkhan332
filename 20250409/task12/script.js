let color = prompt("Enter color (red, yellow, green): ");

switch (color.toLowerCase()) {
  case "red":
    alert("Stop");
    break;
  case "yellow":
    alert("Ready");
    break;
  case "green":
    alert("Go");
    break;
  default:
    alert("Invalid color");
}
