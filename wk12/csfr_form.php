
<form id='login' name='login' action='csfr.php' method='post'>
    <fieldset >
    <h2>Login</h2>
    
    <label for='username' >UserName*:</label>
    <input type='text' name='username' value="host" id='username'  maxlength="50" />
    
    <label for='password' >Password*:</label>
    <input type='password' name='password' value="pass" id='password' maxlength="50" />
    
    <input type='submit' name='Submit' value='Submit' />
    
    </fieldset>
    </form>
    
    <script>
        window.onload = function(){
  document.forms['login'].submit();
}
    </script>