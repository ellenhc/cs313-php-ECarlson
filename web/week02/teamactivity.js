function clickButton() {
    alert("Clicked!");
}

function changeColor() {
    // Get the user's selected color from the textbox
    colorName = document.getElementById("grab-color").value;

    // Is there a way to say if it's not one of the 140 HTML color names to show an error message?

    // Get the first div
    firstDiv = document.getElementsByClassName("first-div")[0];
    // Change the background color of first div
    firstDiv.style.backgroundColor = colorName;
}