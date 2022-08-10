<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
rel="stylesheet"
/>
</head>
<body>
    <div class="card text-center">
        <div class="card-header">Installisation</div>
        <div class="card-body">
          <h5 class="card-title">Install Database</h5>
          <form action="db/installcon.php" method="post">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">DB Host</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Host"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="host"
                        />
                      </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">DB User</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="DB Username"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="user"
                        />
                      </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">DB Password</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="DB Password"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="password"
                        />
                      </div>
                </div>
                
            </div>
            
        
          
          
          
          
          
          
          
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            
          
        </div>
        <div class="card-footer text-muted">2 days ago</div>
      </div>

    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
</body>
</html>