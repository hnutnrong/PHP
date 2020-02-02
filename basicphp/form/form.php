<html>
<body>

    <form action="sendform.php" method="POST"> 
    <input type="text" size="20px" name="myname[]" required>
    <br>
    <input type="text" size="20px" name="myname[]" required>
    <br>
    <select name="edu[]" size="3" style="width:100" multiple="true">
     
        <option value ="ปริญญาตรี">ปริญญาตรี</option>
        <option value ="ปริญาโท">ปริญาโท</option>
        <option value ="ปริญญาเอก">ปริญญาเอก</option>
    </select>
    

    <br>
    <input type="submit">
    </form>

</body>
</html>


