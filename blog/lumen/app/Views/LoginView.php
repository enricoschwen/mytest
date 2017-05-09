<?php

namespace App\Views;

class LoginView extends View
{

    protected function getViewString()
    {
        return '
<form action="/login" method="post">


  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required> <br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required> <br>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <br><br>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>';
    }
}