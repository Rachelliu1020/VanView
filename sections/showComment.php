<?php
$query= "select username, comment, comments.datetime as 'dt' from comments JOIN users on comments.email = users.email where topic = $topic";
$result = mysqli_query($db,$query)or die(mysqli_error($db));

echo "<div class='showComment'>";
    echo "<table class='showCommentTable' border='1'>";

        echo "<tr>";
            echo "<th>User Name</th>";
            echo "<th>Comments</th>";
            echo "<th>Posted Date</th>";
        echo "</tr>";

        //show all commnets
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td width='25%' bgcolor='#F8F7F1'><strong>".$row['username']."</strong></td>";
            echo "<td width='50%' bgcolor='#F8F7F1'><div class='commentField'>".$row['comment']."</div></td>";
            echo "<td width='25%' bgcolor='#F8F7F1'>".$row['dt']."</td>";
            echo "</tr>";
        }

        //no commnet yet
        if(mysqli_num_rows($result)===0){
            echo "<tr>";
                echo "<td colspan='3' bgcolor='#F8F7F1'>No comment yet.</td>";
            echo "</tr>";
        }
    echo "</table>";
echo "</div>";
