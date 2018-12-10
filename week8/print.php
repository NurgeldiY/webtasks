<html>
<style >
	@keyframes bgcolor {
    0% {
        background-color: #45a3e5
    }

    30% {
        background-color: #66bf39
    }

    60% {
        background-color: #eb670f
    }

    90% {
        background-color: #f35
    }

    100% {
        background-color: #864cbf
    }
	}

	body {
	    -webkit-animation: bgcolor 20s infinite;
	    animation: bgcolor 10s infinite;
	    -webkit-animation-direction: alternate;
	    animation-direction: alternate;
	}
</style>
<body>

<p>
<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'ecommers';

	@ $db_conn = mysqli_connect($host, $username, $password, $db);
	$connecting_error = mysqli_connect_error();
	if ($connecting_error != null) {
		echo "<p>We have a connecting error:  . $connecting_error . </p>";
	}

	$query = "SELECT clients_id, last_name FROM clients";
	$result = mysqli_query($db_conn, $query);


	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>ID: " . $row["clients_id"] . "<br/> Last Name: " . $row["last_name"] . "<br/></p>";
		}
	}
	else{
		echo "No result were found";
	}

	mysqli_close($db_conn);

?>
<a href="#section1">go to section 1</a>

<a href="http://google.com">Google</a>

<a name="section1"><a><h3 id="section1">Section 1</h3>
<script>
	$(function () {
    $("a[href^='#']").click(
    function () {
        var $id = $(this).attr("href");
        $($id).css({"background-color":"#cc7733", "transition":"background-color"});

        setTimeout(function () {
            $($id).css("background-color", "#ffffff");
        }, 2500);

    });

});
</script>
</p>

</body>
</html>