<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Amazon Quick Search</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1>What's it selling for on Amazon?</h1>
                    <p class="lead">Quickly look up your item and see the lowest offer.</p>
                    <input type="text" class="form-control" id="search" placeholder="Enter an item name, UPC, ASIN, or ISBN.">
                </div>

                <!-- Create an empty div to place the results of the ajax request -->
                <div id="items"></div>
            </div>
        </div>

        <!-- Jquery and bootstrap JS includes: -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Include the fuzzy search functionality: -->
        <script src="js/fuzzy_search.js"></script>

    </body>
</html>