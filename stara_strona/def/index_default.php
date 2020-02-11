<?php     
    $blackdown_url = 'http://kf.nazwa.pl';
    $domain = preg_replace( '/^www\./ui', "", $_SERVER['HTTP_HOST'] );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
    <head>
        <title><?php echo $domain; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <frameset cols="100%">
        <frame src="<?php echo $blackdown_url; ?>/index,<?php echo htmlspecialchars( $domain ); ?>" name="ramka" />
        <noframes>
            <body>
                <div>
                    Pod tym adresem nie ma jeszcze strony WWW. Zapraszamy później.<br />
                </div>
            </body>
        </noframes>
    </frameset>
</html>