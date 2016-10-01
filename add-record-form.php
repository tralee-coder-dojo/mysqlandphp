<!DOCTYPE html>
<html lang="en">

<style>
body {
    background-color: linen;
}



form {
    width: 80%;
    margin: 0 auto;
}

label, input {
    /* in order to define widths */
    display: inline-block;
}

label {
    width: 30%;
    /* positions the label text beside the input */
    text-align: right;
}

label + input {
    width: 30%;
    /* large margin-right to force the next element to the new-line
       and margin-left to create a gutter between the label and input */
    margin: 0 30% 0 4%;
}

/* only the submit button is matched by this selector,
   but to be sure you could use an id or class for that button */
input  {
     width: 10%;
     margin: 0 50% 0 50%;
}

</style>

<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="insert.php" method="post">
	<p>
    	<label for="name">Type:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
    	<label for="year">Year:</label>
        <input type="text" name="year" id="year">
    </p>
    <p>
    	<label for="desc">Description:</label>
        <input type="text" name="desc" id="desc">
    </p>
	<p>
    	<label for="img">Image Name:</label>
        <input type="text" name="img" id="img">
    </p>
    <p>
    	<label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </p>
    <input type="submit" value="Add Records">
</form>
</body>
</html>