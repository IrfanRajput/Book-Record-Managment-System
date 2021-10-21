<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
                <div class="card mt-5">
                    <div class="card-header">
                      <h1 align="center">Book Record Managment System</h1>
                        <form action="insertion.php" method="post" class="form p-3" >
                            <div class="form-group">
                                <label>Enter Book Title:</label>
                                <input type="text" name="title" class="form-control" required/>
                            </div> 
                            <div class="form-group">
                                <label>Enter Book Price:</label>
                                <input type="number" name="price" class="form-control" required/>
                            </div> 
                            <div class="form-group">
                                <label>Enter Book Author Name:</label>
                                <input type="text" name="author" class="form-control" required/>
                            </div> 
                            <div class="form-group">
                                <br/>
                                <input type="submit" name="insert" class="btn btn-primary" value="Insert Record"/>
                            </div>
                           
                         </form>
                    </div>
                   
                </div>
           
                <a href="Home.php">Go to Home page</a>
            </div>
            <div class="col-sm-2">
                
            </div>
        </div>
    </div>
    

    
</body>
</html>