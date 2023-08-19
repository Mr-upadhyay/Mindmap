<html>
<head>
<title>Random Background Color</title>
</head>
<body>
<h1>Random Background Color</h1>
<script>
// Get the body element.
const body = document.querySelector("body");

// Create a function to generate a random background color.
function randomColor() {
  const red = Math.floor(Math.random() * 255);
  const green = Math.floor(Math.random() * 255);
  const blue = Math.floor(Math.random() * 255);

  return `rgb(${red}, ${green}, ${blue})`;
}

// Listen for clicks on the body element.
body.addEventListener("click", function() {
  // Set the background color to a random color.
  body.style.backgroundColor = randomColor();
});
</script>
</body>
</html>