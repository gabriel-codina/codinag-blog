<h1>Login</h1>
<form method="post" action="/codinag-blog/controller/login-user.php">
    <div>
        <div class="regi user"> 
            <label for="username">Username:</label>
        </div>
        <input placeholder="Username" class="inputs ptitle" type="text" name="username"/>
    </div>

    <div>
        <div class="regi user"> 
            <label for="password">Password:</label>
        </div>
        <input placeholder="Password" class="inputs ptitle" type="password" name="password"/>
    </div>
    
    <a href="forgot_pass.php">Forgot Password?</a>
        

    <div>
        <button class="butto" type="submit">Submit</button>
    </div>
</form>