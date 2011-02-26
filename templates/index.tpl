<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Project Unseen DEV - {$title}</title>
</head>
<body>
    {include file='header.tpl'}

    <a href="index.php">Home</a>&nbsp;|&nbsp;
    <a href="town.php">Town</a>&nbsp;|&nbsp;

    {if $tpl_name!=''}
        {include file="$tpl_name.tpl"}
    {/if}

    {include file='footer.tpl'}
</body>
</html>