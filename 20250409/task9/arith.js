let marks = prompt("Enter your marks out of 100: ");
marks = parseInt(marks);

if (marks >= 90) {
    document.body.innerHTML=("Grade: A+");
} else if (marks >= 80) {
    document.body.innerHTML=("Grade: A");
} else if (marks >= 70) {
    document.body.innerHTML=("Grade: B");
} else if (marks >= 60) {
    document.body.innerHTML=("Grade: C");
} else if (marks >= 50) {
    document.body.innerHTML=("Grade: D");
} else {
    document.body.innerHTML=("Grade: F (Failed)");
}

