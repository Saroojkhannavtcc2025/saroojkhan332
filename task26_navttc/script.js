let day = new Date().getDay();

switch (day) {
  case 0:
    document.body.innerHtml=("Today is Sunday");
    break;
  case 1:
    document.body.innerHtml=("Today is Monday");
    break;
  case 2:
    document.body.innerHTML=("Today is Tuesday");
    break;
  case 3:
    document.body.innerHtml=("Today is Wednesday");
    break;
  case 4:
     document.body.innerHtml=("Today is Thursday");
    break;
  case 5:
    document.body.innerHtml=("Today is Friday");
    break;
    case 6:
        document.body.innerHtml=("Today is Saturday");
    break;
  default:
    document.body.innerHtml=("Not valid");
}


  
