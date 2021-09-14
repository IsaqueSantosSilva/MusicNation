// Function to copy lyrics to clipboard
function CopyToClipBoard() {
  var copyText = document.getElementById("input_content");

  copyText.select();
  copyText.setSelectionRange(0, 99999); //For mobile devices

  navigator.clipboard.writeText(copyText.value);

  alert("Letra Copiada!");
}