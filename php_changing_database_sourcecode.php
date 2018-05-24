<!DOCTYPE html>
<html>
<head>
    <title>PHP Programming_Changing_Database</title>
    <style>
/*        table, td {border: 1px solid; border-collapse: collapse;}*/
    </style>
</head>
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Changing_Database&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;&lt;br&gt;&lt;br&gt;<br/>
        &lt;form&nbsp;action&#61;"php_changing_database.php"&nbsp;style&#61;"text-align: right; width: 20%; font-family: fantasy;"&gt;<br />
        &nbsp;Last&nbsp;Name&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentLastName"&nbsp;pattern&#61;"[A-Za-z\s_'-]{0,}"&nbsp;required&gt;&lt;br&gt;<br />
        &nbsp;First&nbsp;Name&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentFirstName"&nbsp;pattern&#61;"[A-Za-z\s_'-]{0,}"&nbsp;required&gt;&lt;br&gt;<br />
        &nbsp;Middle&nbsp;Name&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentMiddleName"&nbsp;pattern&#61;"[A-Za-z]{1,1}"&nbsp;required&gt;&lt;br&gt;<br />
        &nbsp;Address&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentAddress"&nbsp;pattern&#61;"[A-Za-z0-9\s._-]{0,}"&nbsp;required&gt;&lt;br&gt;<br />
        &nbsp;City&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentCity"&nbsp;pattern&#61;"[A-Za-z\s._-]{0,}"&nbsp;required&gt;&lt;br&gt;<br />
        &nbsp;State&#58;&nbsp;&lt;select&nbsp;name&#61;"studentState"&gt;&lt;option&nbsp;value&#61;"Alabama"&gt;Alabama&lt;/option&gt;&lt;option&nbsp;value&#61;"Alaska"&gt;Alaska&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Arizona"&gt;Arizona&lt;/option&gt;&lt;option&nbsp;value&#61;"Arkansas"&gt;Arkansas&lt;/option&gt;&lt;option&nbsp;value&#61;"California"&gt;California&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Colorado"&gt;Colorado&lt;/option&gt;&lt;option&nbsp;value&#61;"Connecticut"&gt;Connecticut&lt;/option&gt;&lt;option&nbsp;value&#61;"Delaware"&gt;Delaware&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Florida"&gt;Florida&lt;/option&gt;&lt;option&nbsp;value&#61;"Georgia"&gt;Georgia&lt;/option&gt;&lt;option&nbsp;value&#61;"Hawaii"&gt;Hawaii&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Idaho"&gt;Idaho&lt;/option&gt;&lt;option&nbsp;value&#61;"Illinois"&gt;Illinois&lt;/option&gt;&lt;option&nbsp;value&#61;"Indiana"&gt;Indiana&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Iowa"&gt;Iowa&lt;/option&gt;&lt;option&nbsp;value&#61;"Kansas"&gt;Kansas&lt;/option&gt;&lt;option&nbsp;value&#61;"Kentucky"&gt;Kentucky&lt;/option&gt;<br/>
         &lt;option&nbsp;value&#61;"Louisiana"&gt;Louisiana&lt;/option&gt;&lt;option&nbsp;value&#61;"Maine"&gt;Maine&lt;/option&gt;&lt;option&nbsp;value&#61;"Maryland"&gt;Maryland&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Massachusetts"&gt;Massachusetts&lt;/option&gt;&lt;option&nbsp;value&#61;"Michigan"&gt;Michigan&lt;/option&gt;&lt;option&nbsp;value&#61;"Minnesota"&gt;Minnesota&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Mississippi"&gt;Mississippi&lt;/option&gt;&lt;option&nbsp;value&#61;"Missouri"&gt;Missouri&lt;/option&gt;&lt;option&nbsp;value&#61;"Montana"&gt;Montana&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Nebraska"&gt;Nebraska&lt;/option&gt;&lt;option&nbsp;value&#61;"Nevada"&gt;Nevada&lt;/option&gt;&lt;option&nbsp;value&#61;"New Hampshire"&gt;New Hampshire&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"New Jersey"&gt;New Jersey&lt;/option&gt;&lt;option&nbsp;value&#61;"New Mexico"&gt;New Mexico&lt;/option&gt;&lt;option&nbsp;value&#61;"New York"&gt;New York&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"North Carolina"&gt;North Carolina&lt;/option&gt;&lt;option&nbsp;value&#61;"North Dakota"&gt;North Dakota&lt;/option&gt;&lt;option&nbsp;value&#61;"Ohio"&gt;Ohio&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Oklahoma"&gt;Oklahoma&lt;/option&gt;&lt;option&nbsp;value&#61;"Oregon"&gt;Oregon&lt;/option&gt;&lt;option&nbsp;value&#61;"Pennsylvania"&gt;Pennsylvania&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Rhode Island"&gt;Rhode Island&lt;/option&gt;&lt;option&nbsp;value&#61;"South Carolina"&gt;South Carolina&lt;/option&gt;&lt;option&nbsp;value&#61;"South Dakota"&gt;South Dakota&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"Tennessee"&gt;Tennessee&lt;/option&gt;&lt;option&nbsp;value&#61;"Texas"&gt;Texas&lt;/option&gt;&lt;option&nbsp;value&#61;"Utah"&gt;Utah&lt;/option&gt;<br/>
         &lt;option&nbsp;value&#61;"Vermont"&gt;Vermont&lt;/option&gt;&lt;option&nbsp;value&#61;"Virginia"&gt;Virginia&lt;/option&gt;&lt;option&nbsp;value&#61;"Washington"&gt;Washington&lt;/option&gt;<br/>
        &lt;option&nbsp;value&#61;"West Virginia"&gt;West Virginia&lt;/option&gt;&lt;option&nbsp;value&#61;"Wisconsin"&gt;Wisconsin&lt;/option&gt;&lt;option&nbsp;value&#61;"Wycoming"&gt;Wycoming&lt;/option&gt;&lt;/select&gt;&lt;br/&gt;<br/>
        &nbsp;Zip&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentZip"&nbsp;pattern&#61;"[0-9]{5,5}"&nbsp;required&gt;&lt;br&gt;<br/>
        &nbsp;Phone&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentPhone"&nbsp;pattern&#61;"\([0-9]{3,3}\)+\s[0-9]{3,3}-[0-9]{4,4}"&nbsp;placeholder&#61;"(999) 999-9999"&nbsp;required&gt;&lt;br&gt;<br/>
        &nbsp;Date of Birth&#58;&nbsp;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentDOB"&nbsp;pattern&#61;"[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}"&nbsp;placeholder&#61;"YYYY-MM-DD"&nbsp;required&gt;&lt;br&gt;<br/>
        &nbsp;&lt;input&nbsp;type&#61;"reset"&gt;<br/>
        &nbsp;&lt;input&nbsp;type&#61;"submit"&nbsp;value&#61;"Submit"&gt;<br/>
        &lt;/form&gt;&lt;br&gt;&lt;br&gt;<br/>
        &lt;br&gt;&lt;br&gt;<br />
        &lt;a&nbsp;href&#61;"https://hills.ccsf.edu/~eandrew6/php_changing_database_sourcecode.php"&gt;php&#95;changing&#95;database&#95;sourcecode&lt;/a&gt;&lt;br&gt;<br/>       
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>  
</body>    
</html>