<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin ATC</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="adminstyles.css" />

</head>

<body>
    <header>
        <div class="header">
            <a class="title text-white text-decoration-none" href="#">
                Alan Turing Club Administrator
            </a>
        </div>
    </header>

    <main class="container-xl main mt-4">
        <div class="row">
            <button data-bs-toggle="modal" data-bs-target="#createEvent" class="col option me-3"> Create a New Event</button>
            <button data-bs-toggle="modal" data-bs-target="#Members" class="col option me-3"> View Members</button>
            <button data-bs-toggle="modal" data-bs-target="#key" class="col option"> Change Key</button>
        </div>
        <div class="row content">
            <div class="col">
                <h2 class="text-center mt-3">Events</h2>
            </div>
        </div>
    </main>

    <footer class="container-fluid mt-5 text-center">
        <div class="row mt-4 pb-5">
            <h5 class="lead">&copy; Little Flower Degree College 2022</h1>
        </div>
    </footer>

    <!--Create Event Modal-->
    <div class="modal fade " id="createEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="ev-title">Create an Event</h5>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="row">
                    <div class="col">
                        <label for="EvTitle" class="form-label">Name of the Event</label>
                        <input type="text" class="form-control" name="event-title" id="EvTitle">
                    </div>
                    <div class="col">
                        <label for="EvDate" class="form-label">Date</label>
                        <input type="date" class="form-control" name="event-date" id="EvDate">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                    <label for="EvDesc" class="form-label">Event Description</label>
                    <textarea name="event-desc" id="EvDesc" rows="5" class="form-control"></textarea>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="ev-close rounded-1 p-2" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="ev-done rounded-1 p-2 ms-3">Done</button>
            </div>
        </form>
          </div>
        </div>
    </div>

    <!--View Members Modal-->
    <div class="modal fade " id="Members" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="ev-title">Members</h5>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="row">
                        <label for="fil-year" class="form-label">Filter by class and year</label>
                        <div class="col-5">
                            <select class="form-select" name="filter-year" id="fil-year" required>
                                <option disabled selected value="">Select year</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                            </select>
                        </div>
                        <div class="col-5">
                        <select class="form-select" name="filter-class" id="fil-class" size="1">
                            <option disabled selected value="">Select class</option>
                            <option value="MECS">MECS</option>
                            <option value="MSCS">MSCS</option>
                            <option value="MPCS">MPCS</option>
                            <option value="MPCS">MPC</option>
                            <option value="BTMC">BTMC</option>
                            <option value="BZC">BZC</option>
                            <option value="BCOMCA">BCOM CA</option>
                            <option value="BCOMGEN">BCOM GEN</option>
                            <option value="BA">BA</option>                                                
                            <option value="BBA">BBA</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-dark p-2">Go</button>
                    </div>
                </div>
                <div class="row">
                    <table></table>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="ev-close rounded-1 p-2" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
          </div>
        </div>
    </div>

    <!--Change key Modal-->
    <div class="modal fade " id="key" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="ev-title">Change Key</h5>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="row">
                    <div class="col">
                        <label for="curPin" class="form-label">Enter current key</label>
                        <input type="password" class="form-control" name="current-pin" id="curPin">
                        <label for="keyName" class="form-label mt-2">Enter your name</label>
                        <input type="text" class="form-control" name="key-name" id="keyName">
                        <label for="newPin" class="form-label mt-2">Enter new key</label>
                        <input type="password" class="form-control" name="new-pin" id="newPin">
                    </div>
                </div>
            </div>
            <div class="modal-footer mt-3">
                    <button type="button" class="ev-close rounded-1 p-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="ev-done rounded-1 p-2 ms-3">Done</button>
                
            </form>
            </div>
            </div>
        </div>
    </div>
    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>