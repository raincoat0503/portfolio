<form action="./check.php" method="post">

    <table border="1">
        <tr>
            <td>address</td>
            <td><?php echo $_POST["address"]; ?></td>
        </tr>
        <tr>
            <td>fname</td>
            <td><?php echo $_POST["fname"]; ?></td>
        </tr>
        <tr>
            <td>lname</td>
            <td><?php echo $_POST["lname"]; ?></td>
        </tr>
        <tr>
            <td>text</td>
            <td><?php echo $_POST["text"]; ?></td>
        </tr>
    </table>

    <input type="submit" value="送信" />
</form>