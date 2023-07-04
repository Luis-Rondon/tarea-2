<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form - Blides Publicity</title>
    <link rel="icon" type="image/png" href="img/logo_color.png">
    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto
            consequuntur culpa animi corrupti dolorum quod.
          </p>

          <div class="info">
            <div class="information">
              <i class="fa-solid fa-map-location-dot icon"></i>
              <p>Algun lugar, Venezuela</p>
            </div>
            <div class="information">
              <i class="fa-solid fa-envelope icon"></i>
              <p>ejemploemail@gmail.com</p>
            </div>
            <div class="information">
              <i class="fa-solid fa-phone-volume icon"></i>
              <p>1234-567-890</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with Us</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <div class="contact-form">
         <div class="circle one"></div> 
          <div class="circle two"></div>

          <form action="contact-form.php" method="POST">
            <h3 class="title">Contact Us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" required/>
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" required/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" required/>
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>