<?php
include 'db_con.php';

$sql = "SELECT id, address FROM addresses";
$result = mysqli_query($con, $sql);
$addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWBKGXF7C0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-HWBKGXF7C0');
    </script>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="css/swadmin.css">
    <link rel="stylesheet" href="css/swheader.css">
    <link rel="stylesheet" href="css/swcontactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="body-root">
      <div class="body-section">
        
        <header class="header">
          <nav class="navbar">
            <a href="#" class="logo">
                <img src="background/swl.png" alt="SpeakWell" class="logo-img">
              </a>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">&#9776;</label>
            <ul class="links">
              <li><a href="/">Home</a></li>
              <li><a href="index.php#keyfactor">Key Factors</a></li>
              <li><a href="index.php#gallery">Gallery</a></li>
              <li><a href="index.php#blog">Blogs</a></li>
              <li><a href="index.php#about">About Us</a></li>
              <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
          </nav>
        </header>

        <div class="contact-section">
          <div class="contact">
            <h1>Connect Us</h1>
          </div>
          <div class="containerr">
            <div class="content">
              <div class="left-side">
                <div class="address details">
                  <div class="topic">
                  <i class="fas fa-map-marker-alt"></i>Head Office Address</div>
                  <div class="text-one">Plot No, 11, Ambazari Rd, beside Port O Gomez Restaurant,<br> Daga Layout, Gandhi Nagar, Nagpur, Maharashtra 440010</div><br>
                </div>
                <div class="phone details">
                  <div class="topic">
                  <i class="fas fa-phone-alt"></i>Phone</div>
                  <div class="text-one">7757854042  ||  7709376356</div><br>
                </div>
                <div class="email details">
                  <div class="topic">
                  <i class="fas fa-envelope"></i>Email</div>
                  <div class="text-one">indiastopinstitute@gmail.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send Us A Message</div>

                <form class="contactForm" id="contactForm" action="https://api.web3forms.com/submit" method="POST">
                  <div class="input-box">
                    <select name="branch" id="branchSelect" required onchange="updateBranchName()">
                      <option value="" disabled selected>Select Branch</option>
                      <?php foreach ($addresses as $address): ?>
                          <option value="<?php echo htmlspecialchars($address['address']); ?>"><?php echo htmlspecialchars($address['address']); ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <input type="hidden" name="access_key" value="8106ef89-99b4-458c-9f3f-ddefb3b77b8e">

                  <div class="input-box">
                    <input type="text" name="name" placeholder="Enter your Name" required>
                  </div>
                  <div class="input-box">
                    <input type="tel" name="phone_no" placeholder="Enter your Phone Number" required pattern="[0-9]{10,}" minlength="10" maxlength="10" title="Please enter at least 10 digits">
                  </div>
                  <div class="input-box">
                    <input type="text" name="message" row="4" placeholder="Enter your Message">
                  </div>
                  <div class="button">
                    <input type="submit" value="Send Now">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container map_sec">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <div class="map_inner">
                  <h4>Find Us On Google Map</h4>
                  <p>Speakwell Spoken English Language Classes- Best English And Personality Development Training Institute I Best English Academy</p>
                  <a href="https://www.google.com/maps/dir/?api=1&destination=Speakwell+Spoken+English+Language+Classes" target="_blank">
                    Get Directions
                  </a>
                  <div class="map_bind">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29775.523027252115!2d79.00946707266537!3d21.11494303996961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1ddc78f4fc1%3A0x3d19bd52ea961896!2sSpeakwell%20Spoken%20English%20Language%20Classes!5e0!3m2!1sen!2sin!4v1720077364131!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   

        <div id="Whatsapp"></div>
      </div>
    </div>

    <!-- nav script -->
    <script>
      document.querySelectorAll('.navbar a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            const headerOffset = document.querySelector('.header').offsetHeight;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition - headerOffset;

            window.scrollBy({
                top: offsetPosition,
                behavior: 'smooth'
            });
            
            if (window.innerWidth <= 1023) {
                    document.getElementById('menu-toggle').checked = false;
                }
        });
      });
    </script>

    <script>
      document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Your form submission logic here
        const form = event.target;
        const formData = new FormData(form);

        fetch(form.action, {
          method: form.method,
          body: formData
        }).then(response => {
          if (response.ok) {
            alert('Form submitted successfully!');
            form.reset(); // Reset the form fields
          } else {
            alert('There was an issue submitting the form.');
          }
        }).catch(error => {
          alert('There was an error submitting the form.');
        });
      });

      function updateBranchName() {
        const selectElement = document.getElementById('branchSelect');
        const selectedBranchName = selectElement.options[selectElement.selectedIndex].text;
        document.getElementById('branchName').value = selectedBranchName;
      }

      fetch('whatsapp.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('Whatsapp').innerHTML = data;
        });
    </script>
    
  </body>
</html>