<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin ATC</title>
    <!--jQuery-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="adminstyles.css" />
  </head>

  <body>
    <!--This script load the modal on load-->
    <script type="text/javascript">
      $(window).on("load", function () {
        $("#sign-in").modal("show");
      });
    </script>

    <nav class="navbar fixed-top header">
      <div>
        <p class="navbar-brand text-white" href="#">
          Alan Turing Club Administrator
        </p>
      </div>
    </nav>

    <div
      class="modal fade"
      id="sign-in"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <h4 class="text-center">Enter the key to contiue</h4>
            <form method="post" class="d-flex" action="admin.php">
                <input type="text" class="form-control mt-4" name="cred">
                <input type="submit" class="btn btn-success ms-2 mt-4" value="Enter">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
