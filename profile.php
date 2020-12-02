<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <div id="profile-edit-save">
        <h1 id="editSave">Profile</h1>
      </div>
      <!-- <h1>welcome xyz@gmail.com</h1> -->
      <?php
        session_start();
        $email = $_SESSION["email"]; 
      ?>
    <h1 style="color:#fff"><?php echo 'welcome '.$email?></h1>
      <div id="profile-edit-area">
        <form action="editprofile.php" method="POST"> 
        <div id="edit-area-left">
            <table>
              <tbody>
                <tr>
                  <td class="edit-title" name="edit-name">Name:</td>
                  <td><input type="text" class="profileInputBox"/></td>
                </tr>
                <tr>
                  <td class="edit-title" >E-mail:</td>
                  <td><input type="text" name="edit-email" class="profileInputBox"/></td>
                </tr>
                <tr>
                  <td class="edit-title" >Change password:</td>
                  <td><input type="text" name="edit-pass" class="profileInputBox"/></td>
                </tr>
 
              </tbody>
            </table>
        </div>
        <div id="edit-area-right">
          <table>
              <tbody>
                
                  <td class="edit-title" name="report">report:</td>
                  <td><input type="text" class="profileInputBox"/></td>
                </tr>
                <tr>
                  <td class="edit-title" name="Feedback">Feedback:</td>
                  <td><textarea class="profileInputBox"></textarea></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div style="display:flex;flex-direction: column;">
          <input type="submit" class="submit-btn" value="Update" name="profilesub"><br>
          <input type="submit"  class="submit-btn" value="Delete Account" name="delete"><br>
        </div>
    </form>
      </div>
</body>
</html>