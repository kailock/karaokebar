
<!DOCTYPE html>
<html>
<head>
    <title>Karaoke Bar</title>


    <!-- imported libraries -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Custom code-->
    <link href = "main.css" rel="stylesheet" type = "text/css"/>
    <link src = "scripts.js" type="text/javascript"/>

    <?php
        include "functions.php";
    ?>
    <!--<style>
        body {
            background: #757F9A; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #757F9A , #D7DDE8); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #757F9A , #D7DDE8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            text-align: center;
        }
        h1, h3 {
            padding: 30px;
        }
        #results {
            width: 50%;
            height: 100px;
            outline: black dotted thick;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
        }

    </style>-->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
</head>
    <body>

    <div id="header" class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Karaoke Bar Administrator Dashboard</h1>
               <!-- <img src="https://voodoocomedy.com/wp-content/uploads/2013/10/karaoke3jpg.jpg" width="25%">-->
                <h2>INFO 445: Kenneth Neaville, Alex Troupe, Kaitlin Lockhart, Smyth May</h2>
            </div>
        </div>
    </div>

    <form id="song-form">
        <!--<h4>Search Songs:</h4>
        <input type="text" name="song" placeholder="Enter song title">
        <input name="song-submit" type="button" class="btn btn-default btn-xs" value="Submit">

        <h4>Search Products:</h4>
        <input type="text" name="product" placeholder="Enter product name">
        <input name="product-submit" type="button" class="btn btn-default btn-xs" value="Submit">

        <h4>Search Customers:</h4>
        <input type="text" name="cust" placeholder="Enter customer name">
        <input name="cust-submit" type="button" class="btn btn-default btn-xs" value="Submit">

        <h4>Search Vendors:</h4>
        <input type="text" name="vendor" placeholder="Enter vendor name">
        <input name="vendor-submit" type="button" class="btn btn-default btn-xs" value="Submit">-->

        <!--
        <h3>Enter New Song:</h3>
        <div>
            <label for="songtitle">Song</label>
            <input type="text" id="songtitle" placeholder="Enter song title">
        </div>

        <div>
            <label for="genre">Genre</label>
            <input type="text" id="genre" placeholder="Enter song genre">
        </div>

        <div>
            <label for="album">Album</label>
            <input type="text" id="album" placeholder="Enter album title">
        </div>

        <div>
            <label for="artist">Artist</label>
            <input type="text" id="artist" placeholder="Enter artist name">
        </div>
        <input name="song-submit" type="button" class="btn btn-primary btn-md" value="Submit Song">

    </form>

    <form id="product-form">

        <h3>Enter New Product:</h3>
        <div>
            <label for="product">Product</label>
            <input type="text" id="product" placeholder="Enter product name">
        </div>

        <div>
            <label for="prod-type">Type</label>
            <input type="text" id="prod-type" placeholder="Specify product type (i.e. &#34;Beer&#34;)">
        </div>

        <div>
            <label for="vendor">Vendor</label>
            <input type="text" id="vendor" placeholder="Enter vendor name">
        </div>
        <input name="song-submit" type="button" class="btn btn-primary btn-md" value="Submit Product">

    </form> -->
    <form id="new-cust-form">
        <h3>Create New Customer:</h3>
        <div>
            <label for="newfname">First Name</label>
            <input type="text" id="newfname" placeholder="Enter customer's first name">
        </div>

        <div>
            <label for="newlname">Last Name</label>
            <input type="text" id="newlname" placeholder="Enter customer's last name">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="text" id="email" placeholder="Enter customer's e-mail address">
        </div>

        <div>
            <label for="address">Address</label>
            <input type="text" id="address" placeholder="Enter customer's street address (optional)">
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" id="city" placeholder="Enter city of residence (optional)">
        </div>

        <div>
            <label for="county">County</label>
            <input type="text" id="county" placeholder="Enter county of residence (optional)">
        </div>

        <div>
            <label for="state">State</label>
            <input type="text" id="state" placeholder="Enter state of residence (optional)">
        </div>

        <div>
            <label for="zip">ZIP</label>
            <input type="text" id="zip" placeholder="Enter ZIP code (optional)">
        </div>

        <div>
            <label for="dob">DOB</label>
            <input type="text" id="dob" placeholder="Enter customer's date of birth (optional)">
        </div>
        <input id="cust-submit" type="button" class="btn btn-primary btn-md" value="Submit Customer Information">
    </form>

    <form id="order-form">
        <h3>Fill New Order:</h3>
        <div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" placeholder="Enter customer's first name">
        </div>

        <div>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" placeholder="Enter customer's last name">
        </div>

        <div>
            <label for="product">Product</label>
            <input type="text" id="product" placeholder="Enter product name">
        </div>

        <div>
            <label for="q">Quantity</label>
            <input type="text" id=q" placeholder="Enter order quantity">
        </div>
        <input id="order-submit" type="button" class="btn btn-primary btn-md" value="Submit Order">
    </form>



    <h4>Results: (from is-hay04.karaoke_bar)</h4>
    <div id="results"></div>

    </body>
</html>