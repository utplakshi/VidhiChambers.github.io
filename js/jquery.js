var maxWords = 500;
var input = document.getElementById('input');
var output = document.getElementById('output');

output.innerHTML = maxWords + " words left";

input.onkeyup = function() {
    var words = input.value.split(" "); // Convert string into words
    var diff = maxWords - words.length; // Subtract words from maxWords
    if (diff < 0) { // If words < maxWords prevent user from inputting more than maxWords
        words.length = maxWords; // Remove words over limit
        input.value = words.join(" "); // Fill input
        diff = 0;
    }
    output.innerHTML = diff + " words left"; // Tell user new word count
}

function myFunction() {
    document.getElementById("myForm").reset();
}