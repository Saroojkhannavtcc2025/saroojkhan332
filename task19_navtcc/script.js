let now = new Date();

let hour = now.getHours(); // 24-hour format (0-23)


if (hour < 12) 
    {
    document.body.innerHTML = "Good Morning!";
} 


else 
{
    document.body.innerHTML = "Good Afternoon!";
}