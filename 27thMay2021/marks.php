<html>
    <body style="background-color:lightblue;">
	
        <form action=""  method="post">
            <center>
			<h1>Marks Progression</h1>
                <table border=0>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total Marks
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    
    $sum=$a1; //total marks
    $avg=$sum;
    if($avg>=0&&$avg<=50)
        $grade="Fail";
		echo '<body style="background-color:red">';
    if($avg>50&&$avg<=70)
        $grade="Third Class";
		echo '<body style="background-color:orenge">';
    if($avg>70&&$avg<=80)
        $grade="Second Class";
		echo '<body style="background-color:yellow">';
    if($avg>80&&$avg<=90)
        $grade="First Class";
		echo '<body style="background-color:lightblue">';
    if($avg>90)
        $grade="Distinction";
		echo '<body style="background-color:lightgreen">';
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}
            ?>
        </form>
    </body>
</html>