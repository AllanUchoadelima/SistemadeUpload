<!DOCTYPE html>
<html>
<head>
  <title> galeria de imagens </title>
</head>
<body>
  <header>
    <h1><center> Galeria de Cômodos </center></h1>
  </header>
  <main>
    <div class="gallery-container">
      <a href="cozinha01.jpg" class="gallery-items">
        <img src="cozinha01.jpg" alt="cozinha">
      </a>
      <a href="cozinha02.jpg" class="gallery-items">
        <img src="cozinha02.jpg" alt="cozinha">
      </a>
      <a href="cozinha03.jpg" class="gallery-items">
        <img src="cozinha03.jpg" alt="cozinha">
      </a>
      <a href="quarto01.jpg" class="gallery-items">
        <img src="quarto01.jpg" alt="quarto">
      </a>
      <a href="quarto02.jpg" class="gallery-items">
        <img src="quarto02.jpg" alt="quarto">
      </a>
      <a href="quarto03.jpg" class="gallery-items">
        <img src="quarto03.jpg" alt="quarto">
      </a>
      <a href="sala01.jpg" class="gallery-items">
        <img src="sala01.jpg" alt="sala">
      </a>
      <a href="sala02.jpg" class="gallery-items">
        <img src="sala02.jpg" alt="sala">
      </a>
      <a href="sala03.jpg" class="gallery-items">
        <img src="sala03.jpg" alt="sala">
      </a>
    </div>
  </main>

</body>
</html>

<style type="text/css">
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
 header{
  height: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
  }
  header h1{
    font-family: Arial, helvetica, sans-serif;
    font-size: 3rem;
    font-weight: 9000;
    color: black;
  }
 .gallery-container{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 0 2vw;

  }
  .gallery-items{
    width: 340px;
    height: 340px;
    border: 10px;
    box-shadow: 5px 5px 5px black;
    flex-grow: 1;

  }
.gallery-items img{
  width: 100%;
  height: 100%;

}
</style>

