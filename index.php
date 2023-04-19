<style>
input[type=submit] {
  background: #FBCA1F;
  font-family: inherit;
  padding: 0.6em 1.3em;
  font-weight: 900;
  font-size: 18px;
  border: 3px solid black;
  border-radius: 0.4em;
  box-shadow: 0.1em 0.1em;
}

input[type=submit]:hover {
  transform: translate(-0.05em, -0.05em);
  box-shadow: 0.15em 0.15em;
}

input[type=submit]:active {
  transform: translate(0.05em, 0.05em);
  box-shadow: 0.05em 0.05em;
}


</style>

<div>
<html>
<body>
    <form action="Sip.php" method="post" enctype="multipart/form-data">
        <h2>Carica il file</h2>
        <label for="fileSelect">File:</label>
        <input type="file" name="audio" id="fileSelect">
        <input type="submit" name="submit" value="Carica">
        <p><strong>I file consentiti sono solo MP3 / MPEG / OGG</strong></p>

    </form>
</body>

</html>
</div>



