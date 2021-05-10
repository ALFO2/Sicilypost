<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sicilypost</title>

  </head>
  <body>
    <div id="id01" class="modal">

      <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="https://www.nanopress.it/wp-content/uploads/2018/02/Immagini-profilo-Facebook.jpg"  alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Registrati <a href="#">password</a></span>
        </div>
      </form>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
  <header>
    <div id="sidebar">
      <div >
          <button class="button" type="button" name="button"><h2>HOME</h2></button>
      </div>
      <div >
        <button onclick="document.getElementById('id01').style.display='block'"  class="button" id="button2" type="button" name="button"><h2>Accedi</h2> </button>

      </div>

    </div>
    <div id="title">

          <h1><spam id="textblack">Sicily</spam>post</h1>

    </div>

  </header>

  <div  class="content">
    <div class="box-2">
      <hr>
      <div  class="center_text">
         <h2>Chi siamo</h2>
      </div>
      <hr>
      <div class="">

      </div>

    </div>
    <hr>
    <div class="box-2">
      <hr>
      <div class="center_text">
         <h2>I nostri servizi</h2>
      </div>
      <hr>
      kposdsa
      <div class="">

      </div>
    </div>
  </div>

  </body>
  <footer>
    <hr>
    </div>
    <div class="footer">
      <div class="box-3">
        <h3>Contantti</h3>
        <ul>
          <li>Telefono</li>
          <li>EMAIL</li>
          <li>Instagram</li>
        </ul>
      </div>
      <hr>
      <div class="box-3">
        <h3>Contantti</h3>
        <ul>
          <li>cite</li>
          <li>asd</li>
          <li>asdsa</li>
        </ul>
      </div>
      <hr>
      <div class="box-3">
        <h3>Contantti</h3>
        <ul>
          <li>cite</li>
          <li>asd</li>
          <li>asdsa</li>
        </ul>
      </div>
      </div>
    </footer>
  <style media="screen">

  </style>
</html>
