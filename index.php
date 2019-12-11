<?php
if(isset($_POST['login']) && isset($_POST['password']))
{
    #There are default credentials. Obviously change it in production!
    if($_POST['login']==='cmsadministrator' && $_POST['password']==='VeryC0mpl!catedButDef@ultP@ssw0rd')
    {
        $authorized = True;
        include('cms_protected_page.php');
    }
    else
    {
        $login = true;
        $failed = true;
        include('cms_auth_page.php');
    }
}
else
{
    $login = true;
    include('cms_auth_page.php');
}
?>
