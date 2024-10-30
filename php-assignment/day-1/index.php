<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Assignment</title>
    <link rel="stylesheet" href="<?php echo 'styles.css'; ?>" />
    <script src="<?php echo 'app.js'; ?>"></script>
  </head>
  <body>
    <form action="process.php" method="post" onsubmit="return validateForm()">
      <section class="form-section">
        <div class="form-group">
          <div class="form-group-item">
            <label class="form-label" for="name">
              <span class="form-label-text">Name</span>
              <span class="required-field">*</span>
            </label>
            <span class="error-message" style="display: none">Please enter your name</span>
            <input
              class="form-input transform"
              type="text"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
          </div>
          <div class="form-group-item">
            <label class="form-label" for="age">
              <span class="form-label-text">Age</span>
              <span class="required-field">*</span>
            </label>
            <span class="error-message" style="display: none">Please enter your age</span>
            <input
              class="form-input transform"
              type="number"
              id="age"
              name="age"
              placeholder="Enter your age"
            />
          </div>
          <div class="form-group-item">
            <label class="form-label" for="fav_color">
              <span class="form-label-text">Favorite Color</span>
              <span class="required-field">*</span>
            </label>
            <span class="error-message" style="display: none">Please select your favorite color</span>
            <select
              class="form-input transform"
              name="fav_color"
              id="fav_color"
            >
              <option value="" selected disabled>Select your favorite color</option>
              <option value="red">Red</option>
              <option value="blue">Blue</option>
              <option value="green">Green</option>
              <option value="other">Others</option>
            </select>
          </div>
          <button class="submit-btn transform" type="submit">Submit</button>
        </div>
      </section>
    </form>
  </body>
</html>
