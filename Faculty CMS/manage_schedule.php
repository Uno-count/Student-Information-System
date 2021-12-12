<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Dashboard</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['firstname'])) {
  ?>


    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php if (isset($_SESSION['firstname'])) {
                                        echo $_SESSION['firstname'][0]; //firstname
                                      }
                                      ?></a></li>
            <li><a href="prof-logout.php">Logout</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>UCC | SIS <small>Manage Your Class</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Student</a></li>
                <li><a href="#">Manage Schedule</a></li>
                <li><a href="#">Manage Grades</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="manage_schedule.php">Dashboard</a></li>
          <li class="active">Schedule</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="manage_students.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Students <span class="badge"></span></a>
              <a href="manage_schedule.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="manage_grades.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Grades <span class="badge"></span></a>
            </div>
          </div>
          <div class="col-md-9">

            <!-- Latest Users -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Schedule</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Subject Course</th>
                    <th>Year & Section</th>
                    <th>Date & Time</th>
                  </tr>
                  <tr>
                    <td>Network & Computations</td>
                    <td>BSCS 3/C</td>
                    <td>12/12/21 - 8:30am</td>
                  </tr>
                  <tr>
                    <td>Advance Web System</td>
                    <td>BSCS 2/C</td>
                    <td>7/15/21 - 10:30am</td>
                  </tr>
                  <tr>
                    <td>Network & Computations</td>
                    <td>BSCS 3/C</td>
                    <td>12/12/21 - 8:30am</td>
                  </tr>
                  <tr>
                    <td>Advance Web System</td>
                    <td>BSCS 2/C</td>
                    <td>8/5/21 - 10:30am</td>
                  </tr>
                  <tr>
                    <td>Network & Computations</td>
                    <td>BSCS 3/C</td>
                    <td>8/8/21 - 8:30am</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add Page</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Page Title</label>
                <input type="text" class="form-control" placeholder="Page Title">
              </div>
              <div class="form-group">
                <label>Page Body</label>
                <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Published
                </label>
              </div>
              <div class="form-group">
                <label>Meta Tags</label>
                <input type="text" class="form-control" placeholder="Add Some Tags...">
              </div>
              <div class="form-group">
                <label>Meta Description</label>
                <input type="text" class="form-control" placeholder="Add Meta Description...">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  <?php
  } else {
    header("location:login.php");
  }
  ?>

  <script>
    CKEDITOR.replace('editor1');
  </script>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>