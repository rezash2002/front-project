<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="grid"></div>
    <div class="wrapper edit">
      <div class="title-text">
        <div class="title">Edit Profile</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form class="signup" action="edit_profile_controller.php?id=8"  method="post">
            <div class="field">
              <label for="fullname" class="text">Full Name:</label>
              <input
                type="text"
                placeholder="Full name"
                required
                id="fullname"
                name="fullname"
                value="<?=$fullname?>"
                autofocus
              />
            </div>
            <div class="field">
              <label for="email" class="text">Email Address:</label>
              <input
                type="email"
                placeholder="Email Address"
                required
                id="email"
                name="email"
                value="<?=$email?>"
              />
            </div>
            <div class="field">
              <label for="password" class="text">Password:</label>
              <input
                type="password"
                placeholder="Password"
                required
                id="password"
                name="password"
                value="<?=$password?>"
              />
            </div>
            <div class="field">
              <label for="Confirm password" class="text"
                >Confirm Password:</label
              >
              <input
                type="password"
                placeholder="Confirm password"
                required
                id="Confirm password"
                name="ConfirmPassword"
                value="<?=$password?>"
              />
            </div>
            <div class="field">
              <input type="submit" value="Update" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="grid"></div>
  </body>
</html>
