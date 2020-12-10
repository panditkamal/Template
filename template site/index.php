<?php
    $conn = mysqli_connect("localhost", "root", "", "kk") or die("connection failed");
    if(isset($_POST['submit'])){
        $na = $_POST['name'];    
        $nu = $_POST['number'];    
        $ma = $_POST['massage'];    
        $sql = "INSERT INTO `Contect us` (`name`, `number`, `massage`) VALUES ('$na', '$nu', '$ma')";
        $res = mysqli_query($conn, $sql) or die('connection faild');
        If($res){
            echo "<script>alert('We Respose you soon')</script>";

        }else{
            echo "<script>alert('invalid data')</script>";

        }
    };
?>

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
    <?php
      include '_header.php';
    ?>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">About Us</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pen-nib"></i>
              <h3>Simple sites</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-roller"></i>
              <h3>E-commerce </h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-pencil-alt"></i>
              <h3>Design</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-paint-brush"></i>
              <h3>Computer Programmer</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-ruler-combined"></i>
              <h3>Database Administrator</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-building"></i>
              <h3>Software Developer</h3>
            </div>
            <p class="service-text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloremque, officia! Necessitatibus delectus sed dicta corrupti
              voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img src="images/center pic.png" />
          </div>
        </div>
      </section>

      <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Our Team</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/kamal.jpeg" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>Kamal Sharma</h2>
              <h3>junior web developer</h3>
              <p>
                "junior web developer works with a team of developers to create new websites and applications. The junior designation means you work under the supervision of senior developers in your department, but you may be involved in all stages of the project, from brainstorming to final testing."
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/vipin.jpeg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Vipin Goyal</h2>
              <h3>Senior developer</h3>
              <p>
                "A senior developer possesses: 5-8 years of experience. Intrinsic passion for learning and self-development. 110% work ethic. Experience in solving problems and tasks of different complexity."
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person.jeg" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Sahil joshan</h2>
              <h3>Web designer</h3>
              <p>
                "Web fundamentals, including HTML, CSS, and JavaScript Strong UI design (e.g., layout, forms, dropdown menus, call-to-action buttons) Basic UX design (e.g., wireframes, storyboards, user testing) CMS/web design platforms such as WordPress, Joomla, and Squarespace Communication (e.g., collaboration with developers, graphic designers, and writers!"
              </p>
              <button>Read More</button>
            </div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="contact-wrapper">
          <div class="contact-left"></div>
          <div class="contact-right">
            <h1 class="contact-heading">Contact</h1>
            <form method="post">
              <div class="input-group">
                <input type="text" placeholder="Name" class="field" name="name"  required/>
              </div>
              <div class="input-group">
                <input type="number" class="field" placeholder="Number" name="number" required/>
              </div>
              <div class="input-group">
                <textarea class="field" name="massage" required placeholder="Type query"></textarea>
              </div>
              <input type="submit" class="submit-btn" name="submit" value="Submit" />
            </form>
          </div>
        </div>
      </section>     

      <?php
        include "_footer.php";
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


