<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/page_1.css">
    <link rel="stylesheet" href="../assets/css/contact_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Roboto+Mono" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon.png">

      <title>Connor Scoma | Contact Form</title>
  </head>

    <body>
      <div class="wrapper">

        <br>
        <br>

        <section>
            <nav>
              <div class="nav">
                <a class="nav1" href="https://github.com/ConnorScoma1">Github</a>
                <a class="nav2" href="https://www.linkedin.com/in/connor-scoma-92730331/">Linkedin</a>
                <a class="nav3" href="../page_1/page.htm">Artwork</a>
                <a class="nav4" href="../page_2/page_2.htm">Portfolio</a>
                <a class="nav5" href="../index.htm">Home</a>

              </div>
            </nav>

        </section>
          <br>

            <section>
              <h1 class="Name">Contact Form</h1>
            </section>



                <div class="form">
                  <p>SEND E-MAIL</p>
                    <form class="contact-form" action="contactform.php" method="post">
                      <input type="text" name="name" placeholder="Full name">
                      <input type="text" name="mail" placeholder="Your e-mail">
                      <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button type="submit" name="submit">SEND MAIL</button>

                        <?php

                        if (isset($_POST['submit'])){
                          $name = $_POST['name'];
                          $subject = $_POST['subject'];
                          $mailFrom = $_POST['mail'];
                          $message = $_POST['message'];

                          $mailto = "&#x6d;&#x61;&#105;&#108;&#x74;&#x6f;&#58;&#x63;&#111;&#x6e;&#x6e;&#x6f;&#114;&#115;&#99;&#111;&#109;&#97;&#64;&#103;&#x6d;&#x61;&#105;&#108;&#46;&#99;&#x6f;&#109;";
                          $headers = "From: ".$mailFrom;
                          $txt = "You have recived an e-mail from ".$name. ".\n\n".$message;

                          mail($mailto, $subject, $headers, $mailFrom);
                          header("Location: index.php?mailsend");
                        }

                        ?>

                    </form>

                </div>


      </div>

<br>
<br>
<br>


    </body>
  </html>
