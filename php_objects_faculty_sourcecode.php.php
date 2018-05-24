<!DOCTYPE html>
<html>
<head>
    <title>PHP Programming_Objects</title>
    <style>
/*        table, td {border: 1px solid; border-collapse: collapse;}*/
    </style>
</head>
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Objects&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br/>
        &nbsp;&lt;?php<br />
        &nbsp;&nbsp;&#36;facultyID&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyID'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;facultyLastName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyLastName'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;facultyFirstName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyFirstName'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;facultyMiddleName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyMiddleName'&#93;&#59;<br/><br/>
       
        &nbsp;&nbsp;&#36;facultyLocationID&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyLocationID'&#93;&#59;<br/><br/>
        
        &nbsp;&nbsp;&#36;facultyPhone&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyPhone'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;facultyRank&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyRank'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;facultyPin&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'facultyPin'&#93;&#59;<br/><br/>
       
        &nbsp;&nbsp;class&nbsp;Database&#95;Faculty&#123;<br/>
        
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyID&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyLastName&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyFirstName&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyMiddleName&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyLocationID&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyPhone&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyRank&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;facultyPin&#59;<br/><br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;get&#40;&#36;newData&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;if&#40;isset&#40;&#36;this&#45;&gt;facultyID&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&#36;this&#45;&gt;facultyID&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;newData&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;set&#40;&#36;newData&#44;&nbsp;&#36;input&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;form&nbsp;style&#61;"border: 1px solid #eee; width: 20%; font-family: monospace;"&gt;&lt;br&gt;Data&nbsp;entered&#58;&#39;&#46;&#36;input&#46;&#39;&lt;/form&gt;&#39;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;this&#45;&gt;facultyID&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;input&#59;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>     
        &nbsp;&nbsp;&#36;fID&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fID&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyID&#59;<br/>
        &nbsp;&nbsp;&#36;fLName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fLName&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyLastName&#59;<br/>
        &nbsp;&nbsp;&#36;fFName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fFName&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyFirstName&#59;<br/>
        &nbsp;&nbsp;&#36;fMName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fMName&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyMiddleName&#59;<br/>
         &nbsp;&nbsp;&#36;fLID&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fLID&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyLocationID&#59;<br/>
        &nbsp;&nbsp;&#36;fPhone&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fPhone&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyPhone&#59;<br/>
        &nbsp;&nbsp;&#36;fRank&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fRank&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyRank&#59;<br/>
        &nbsp;&nbsp;&#36;fPin&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Faculty&#59;<br/>
        &nbsp;&nbsp;&#36;fPin&#45;&gt;Database_Faculty&nbsp;&#61;&nbsp;&#36;facultyPin&#59;<br/><br/>
        &nbsp;&nbsp;echo&nbsp;&#39;&lt;br&gt;Enter&nbsp;data&nbsp;here&nbsp;to&nbsp;change&nbsp;entries&#58;&nbsp;&lt;br&gt;&lt;br&gt;&#39;&#59;<br/><br/>
        
        &nbsp;&nbsp;if&#40;isset&#40;&#36;&#95;GET&#91;&#39;source&#39;&#93;&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;hightlight&#95;file&#40;&#36;&#95;SERVER&#91;&#39;SCRIPT&#95;FILENAME&#39;&#93;&#41;&#59;<br/>
        &nbsp;&nbsp;&nbsp;exit&#59;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;function&nbsp;change&#95;data&#40;&#41;&#123;<br/>
        &nbsp;&nbsp;&#36;data&nbsp;&#61;&nbsp;&lt;&lt;&lt;FORM<br/>
        &nbsp;&nbsp;&lt;form&nbsp;action&#61;"#"&nbsp;method&#61;"post"&nbsp;style&#61;"text-align: right; width: 20%; font-family: fantasy;"&gt;<br/>
        &nbsp;&nbsp;&nbsp;Faculty&nbsp;ID&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyID"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Last&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyLastName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;First&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyFirstName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Middle&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyMiddleName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Location&nbsp;ID&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyLocationID"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Phone&#58;&lt;input&nbsp;type&#61;"tel"&nbsp;name&#61;"facultyPhone"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Rank&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"facultyRank"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Pin&#58;&lt;input&nbsp;type&#61;"password"&nbsp;name&#61;"facultyPin"&gt;&lt;br&gt;<br/>
    
        &nbsp;&nbsp;&nbsp;&lt;input&nbsp;type&#61;"reset"&gt;<br/>
        &nbsp;&nbsp;&nbsp;&lt;input&nbsp;type&#61;"submit"&nbsp;value&#61;"Submit"&nbsp;name&#61;"submit"&gt;<br/>
        &nbsp;&nbsp;&lt;/form&gt;<br/>
        &nbsp;&nbsp;FORM&#59;<br/>
        &nbsp;&nbsp;echo&nbsp;&#36;data&#59;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;function&nbsp;submit&#40;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;return&nbsp;&#36;&#95;SERVER&#91;&#39;REQUEST&#95;METHOD&#39;&#93;&nbsp;&#61;&#61;&nbsp;&#39;POST&#39;&#59;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;change&#95;data&#40;&#41;&#59;<br/>
        &nbsp;&nbsp;&nbsp;if&#40;submit&#40;&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeID&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyID"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeLastName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyLastName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeFirstName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultytFirstName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeMiddleName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyMiddleName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeLocationID&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyLocationID"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changePhone&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyPhone"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeRank&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyRank"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changePin&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"facultyPin"&#93;&#59;<br/>
        
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&#63;&gt;<br />
        &nbsp;&lt;br&gt;&lt;br&gt;<br/>
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>
