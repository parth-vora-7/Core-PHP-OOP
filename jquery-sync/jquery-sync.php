<?php
    if(!empty($_GET)) {
        sleep(3);
        echo 'yo';exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>jQyery asynchronous call</title>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script>
            function callme() {
                $.ajax({
                    async: false,
                    type: 'GET',
                    data: {data: 'get'},
                    url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                    success: function (res) {
                        alert(res);
                    }
                });
            }
        </script>
    </head>
    <body>
        <button onclick="callme()">Call</button>
        <br><br><br>
        <button onclick="callme()">Call</button>
        <textarea></textarea>
    </body>
</html>
