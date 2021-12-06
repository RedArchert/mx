<?php
namespace MX\View;

class UserForm
{
    public static function render()
    {
        return <<<EOT
<form method="post" action="/index.php">
<label>Firstname:</label><input type="text" name="fname" value="Gordon"/><br/>
<label>lastname:</label><input type="text" name="lname" value="Ramsay"/><br/>
<label>Role:</label><input type="text" name="role" value="Author"/><br/>
<input type="submit" name="submit" />
<form>
EOT;
    }
}

