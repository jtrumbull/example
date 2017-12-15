<?php
include 'lib/bootstrap.php';
?>

<!doctype html>

<html lang="en">
    
    <head>
        
        <!-- Meta
        ---------------------------------------------------------------------->
        
        <title>Hello, world!</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS
        ---------------------------------------------------------------------->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
    </head>
    <body>
        
        <div class="container" style="margin-top: 30px;">
            
            <h1>Zillow API <hr /></h1>
            
            <h2>Get deep comps</h2>
            
            <form action="actions/comps.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Select file for GetDeepComps</label>
                    <input type="file" name="file" class="form-control" />
                </div>
                <button class="btn btn-primary form-control">
                    Submit
                </button>
            </form>
            
            <h4 style="margin-top: 20px">Input file specification</h4>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>client_id</td>
                        <td>A unique identifier for the record</td>
                    </tr>
                    <tr>
                        <td>api_key</td>
                        <td>The Zillow Web Service Identifier</td>
                    </tr>
                    <tr>
                        <td>zpid</td>
                        <td>The Zillow Property ID for the property for which to obtain information</td>
                    </tr>
                    <tr>
                        <td>count</td>
                        <td>The number of comparable recent sales to obtain (integer between 1 and 25)</td>
                    </tr>
                    <tr>
                        <td>rentzestimate</td>
                        <td>Return Rent Zestimate information if available (boolean true/false, default: false)</td>
                    </tr>
                </tbody>
            </table>
            
            <hr />
            
        </div>

        <!-- Javascript
        ---------------------------------------------------------------------->
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
    </body>
</html>