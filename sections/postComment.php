<?php
//if user log in, they can see and post comments, if not log in, only can see the comment.
if(isset($_SESSION['authority']) && $_SESSION['authority']===1){
    echo "<div class='postComment'>";
        echo "<form id='postCommentForm' name='postCommentForm' method='post' action='../sections/processPostComment.php' onsubmit='return validateForm();'>";
            echo "<table class='postCommentTable'>";
                echo "<tr >";
                    echo "<th colspan='2' bgcolor='#CCCCCC' >Post a Comment</th>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td><label for='comment'><span class='star'>*</span>Comment:  </label></td>";
                    echo "<td><textarea name='comment' id='comment' cols='60' rows='10' onfocus='textDisappear()' onblur='textAppear()'>Enter your comments here</textarea>";
                    echo "<br><span id='reminderComment'></span></td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2' align='center'><input type='hidden' name='topic' value = $topic></td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2' align='center'><input type='submit' name='postComment' value='Post Comment' id='submit'></td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";
    echo "</div>";
}else{
    echo "<p>Please <a href='../login.php'>login</a> or <a href='../register.php'>register</a> to post a comment.</p>";
}