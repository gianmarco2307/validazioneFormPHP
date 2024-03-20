<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
    <title>Landing Page Interattiva</title>
  </head>
  <body>
    <div class="container">
      <h1>Fill the form below</h1>
      <p>Complete the below form to get instant access.</p>
      <form action="process_form.php" method="post">
        <input type="text" id="company" name="company" required placeholder="Company name"/>

        <input type="text" id="fullname" name="fullname" required placeholder="Full name"/>

        <input type="email" id="email" name="email" required placeholder="Email"/>

        <input type="tel" id="phone" name="phone" required placeholder="Phone"/>

        <select id="service" name="service" required>
          <option value="" disabled selected>Choose service...</option>
          <option value="Web Design">Web Design</option>
          <option value="SEO">SEO</option>
          <option value="Social Media Marketing">Social Media Marketing</option>
        </select>

        <button type="submit">Send request</button>
      </form>
    </div>
    <div class="containerImg">
      <img src="image.png" alt="">
    </div>
    <script src="script.js"></script>
  </body>
</html>
