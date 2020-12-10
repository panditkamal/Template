<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Architect Website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="spinner-container">
      <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <?php
     include '_header.php';
    ?>

    
      <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Our Team</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/site3.png" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>Shop site</h2>
              <a href="http://kpandit.epizy.com/?i=1"><button>Vite the site</button></a>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/site1.jpeg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Problem solving site</h2>
              <a href="http://kpandit.epizy.com/?i=1"><button>Vite the site</button></a>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/site2.jpeg" alt="Architect" />
            </div>
            <div class="card-info">
                <div class="card-info">
                    <h2>Ielts Center site</h2>
                    <a href="https://northerneducation.in/"><button>Vite the site</button></a>
                  </div>
            </div>
          </div>
        </div>
      </section>

     <?php
         include '_footer.php';
     ?>

    <script src="script.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>
  </body>
</html>