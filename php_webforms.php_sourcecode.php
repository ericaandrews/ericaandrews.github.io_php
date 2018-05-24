<!DOCTYPE html>
<html>
<head><title>PHP Programming_PHP Example</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_PHP Example&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
        &nbsp;&lt;?php<br />
        &nbsp;&nbsp;&#36;totalamountofloan&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;totalamountofloan&#39;&#93;&#59;<br />
        &nbsp;&nbsp;&#36;interestrate&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;interestrate&#39;&#93;&#59;<br />
        &nbsp;&nbsp;&#36;numberofmonths&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;numberofmonths&#39;&#93;&#59;<br />
        &nbsp;&nbsp;&#36;x&nbsp;&#61;&nbsp;1&#43;&#40;&#40;&#36;interestrate&#42;0.010&#41;/12&#41;&#59;<br />
        &nbsp;&nbsp;&#36;xx&nbsp;&#61;&nbsp;&#40;pow&#40;&#36;x&#44;&nbsp;&#36;numberofmonths&#41;&#41;&#59;<br />
        &nbsp;&nbsp;&#36;payment&nbsp;&#61;&nbsp;&#36;totalamountofloan&#42;&#40;&#40;&#36;interestrate&#42;0.010&#41;/12&#41;&#42;&#40;&#36;xx/&#40;&#36;xx&#45;1&#41;&#41;&#59;<br />
        &nbsp;&nbsp;printf&#40;"&#37;&#46;2f"&#44;&#36;payment&#41;&#59;<br />
        &nbsp;&#63;&gt;<br />
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>