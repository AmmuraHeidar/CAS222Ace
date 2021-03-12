<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>CAS-222 Template | Ammura Heidar</title>
    <meta name="author" content="Ammura Heidar">
    <meta name="description" content="Week 6, Template Assignment">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <link rel="icon" type="image/x-icon" href="" />

</head>

<body>

    <div id="container">

        <header class="header">

        <?php include 'includes/header.inc.html.php'; ?>
        <?php include 'includes/navigation.inc.html.php'; ?>

        </header>

        <main>

            <h2>ACE IN THE HOLE MULTISPORT EVENTS</h2>

            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.</p>
            <p>We offer Events for Every Body.</p><br><br>
            
            <?php include 'gallery.php' ?><br>
            
            <!-- weather widget start -->
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original">PORTLAND WEATHER</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://weatherwidget.io/js/widget.min.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'weatherwidget-io-js');
            </script>
            <!-- weather widget end -->
        

        </main>
    </div>


    <?php include 'includes/footer.inc.html.php'; ?>

    <script type="text/javascript" src=""></script>

</body>

</html>
