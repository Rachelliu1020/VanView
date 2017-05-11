http://magicdeveloper.we.bs/VanView/index.php

Rui Liu A00901234 3S

This website is a Vancouver Tourism Information website called "VanView"

1. this website can show some popular tourist attractions on Vancouver.

2. visitors can register or login as member, and allow to logout
    2.1 on the top right of the website, show login image button and a register link called "New User?"
        click login image button to login, click "New User?" to register
        after they login/register, on the top right of the website will show member username and a "Logout?" link,
        after login/register, set some session values, setcookie for email, if go to login page, it will show cookie value email on the email field.
    2.2 after logout, kill sessions.

3. no mater whether visitor register or not, they can use Contact-us to give a feedback to me.
    3.1 after user register/login, on Contact-us form, the user firstname, lastname, email will automatically fill out,
        and user only need to fill out other fields.
    3.2 if user doesn't register/login, they also can give a feedback on Contact-us page, they need to fill out firstname, lastname, email and other field.

4. show comments and allow members to post comments on each tourist attraction page
    4.1 if visitors register/login, they can post comments on a tourist attraction page
        after they post a comment, the database and comments table on the website will update to show all comments about the tourist attraction page.
    4.2 if visitors do not register/login, they only can see the comments for each tourist attraction page.

5. create 3 tables: users, feedbacks, comments
    5.1 users table to record user register info
    5.2 feedbacks table to record the feedback content
    5.3 comments table to record the comments for each tourist attraction topic.


