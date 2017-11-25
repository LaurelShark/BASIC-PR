<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metodist's personal cabinet</title>
    <!-- Bootstrap core CSS -->
  
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i>
             Metodist's personal cabinet <small>Be the best metodist!</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create User
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Teacher</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Student</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Today's motivational quote: Sum is the sum of small efforts, repeated day in and day out.</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.html" class="list-group-item"><i class="fa fa-university" aria-hidden="true"></i></span> University <span class="badge">12</span></a><!-- тут сторінки, не універ-->
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Curriqulum <span class="badge">33</span></a><!-- тут пости, не домашки-->
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">203</span></a><!-- тут юзери, не друзі-->
            </div>

            <div class="well">
              <h4>Studying process</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Algebra</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
          <h4>Geometry</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                    55%
            </div>
          </div>
          <h4>Programming</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    70%
            </div>
          </div>
          <h4>Web Development</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90" style="width: 90%;">
                    90%
            </div>
          </div>


            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Possibilities</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a type="button" data-toggle="modal" data-target="#addPage">Add Teacher</a> </h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a type="button" data-toggle="modal" data-target="#addPage">Add Student</a></span></h2>                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <a type="button" data-toggle="modal" data-target="#">Curriqulum</h2>                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 92,18</h2>
                    <h4>Personal Rating</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23b7aaaa&amp;src=ekp2jn033r3nhlisflhlrqn1ck%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FHelsinki" 
              style="border-width:0" width="845" height="600" frameborder="0" scrolling="no"></iframe>

          </div>
        </div>
      </div>
    </section>

<footer id="main-footer">
    <div class="container">
      <div id="footer-logo">
        Especially for Stemukr01, 

        <span> Kyiv 2017</span>
      </div>
      <div id="footer-copy">~©~</div>
    </div>
  </footer>
    

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>User ID</label>
          <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Surname</label>
          <input type="text" class="form-control" placeholder="Surname">        
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label>Birth Date</label>
          <input type="text" class="form-control" placeholder="Email">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
