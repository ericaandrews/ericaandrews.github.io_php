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
        &nbsp;&nbsp;&#36;studentID&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentID'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentLastName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentLastName'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentFirstName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentFirstName'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentMiddleName&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentMiddleName'&#93;&#59;<br/><br/>
       
        &nbsp;&nbsp;&#36;studentAddress&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentAddress'&#93;&#59;<br/><br/>
        
        &nbsp;&nbsp;&#36;studentPhone&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentPhone'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentClass&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentClass'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentDOB&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentDOB'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentPin&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentPin'&#93;&#59;<br/>
        &nbsp;&nbsp;&#36;studentFacultyID&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;'studentFacultyID'&#93;&#59;<br/><br/>
        
        &nbsp;&nbsp;class&nbsp;Database&#95;Student&#123;<br/><br/>
        
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentID&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentLastName&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentFirstName&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentMiddleName&#59;<br/><br/>
       
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentPhone&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentClass&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentDOB&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentPin&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentFacultyID&#59;<br/><br/>
        
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;get&#40;&#36;newData&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;if&#40;isset&#40;&#36;this&#45;&gt;studentID&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&#36;this&#45;&gt;studentID&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;newData&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;set&#40;&#36;newData&#44;&nbsp;&#36;input&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;form&nbsp;style&#61;"border: 1px solid #eee; width: 20%; font-family: monospace;"&gt;&lt;br&gt;Data&nbsp;entered&#58;&#39;&#46;&#36;input&#46;&#39;&lt;/form&gt;&#39;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;this&#45;&gt;studentID&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;input&#59;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;class&nbsp;Address&#123;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;&#36;studentAddress&#59;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;get&#40;&#36;newData&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;if&#40;isset&#40;&#36;this&#45;&gt;studentAddress&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&#36;this&#45;&gt;studentAddress&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;newData&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;&#95;&#95;set&#40;&#36;newData&#44;&nbsp;&#36;input&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;form&nbsp;style&#61;"border: 1px solid #eee; width: 20%; font-family: monospace;"&gt;&lt;br&gt;Data&nbsp;entered&#58;&nbsp;&#39;&#46;&#36;input&#46;&#39;&lt;/form&gt;&#39;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;this&#45;&gt;studentAddress&nbsp;&#61;&nbsp;&#36;this&#45;&gt;&#36;input&#59;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;&#36;sID&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sID&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentID&#59;<br/>
        &nbsp;&nbsp;&#36;sLName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sLName&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentLastName&#59;<br/>
        &nbsp;&nbsp;&#36;sFName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sFName&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentFirstName&#59;<br/>
        &nbsp;&nbsp;&#36;sMName&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sMName&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentMiddleName&#59;<br/><br/>
        
        &nbsp;&nbsp;&#36;sAddress&nbsp;&#61;&nbsp;new&nbsp;Address&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sAddress&#45;&gt;Address&nbsp;&#61;&nbsp;&#36;studentAddress&#59;<br/><br/>
        
        &nbsp;&nbsp;&#36;sPhone&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sPhone&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentPhone&#59;<br/>
        &nbsp;&nbsp;&#36;sClass&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sClass&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentClass&#59;<br/>
        &nbsp;&nbsp;&#36;sDOB&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sDOB&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentDOB&#59;<br/>
        &nbsp;&nbsp;&#36;sPin&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;sPin&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentPin&#59;<br/>
        &nbsp;&nbsp;&#36;fID&nbsp;&#61;&nbsp;new&nbsp;Database&#95;Student&#59;<br/>
        &nbsp;&nbsp;&#36;fID&#45;&gt;Database_Student&nbsp;&#61;&nbsp;&#36;studentFacultyID&#59;<br/><br/>
        
        &nbsp;&nbsp;echo&nbsp;&#39;&lt;br&gt;Enter&nbsp;data&nbsp;here&nbsp;to&nbsp;change&nbsp;entries&#58;&nbsp;&lt;br&gt;&lt;br&gt;&#39;&#59;<br/><br/>
        
        &nbsp;&nbsp;if&#40;isset&#40;&#36;&#95;GET&#91;&#39;source&#39;&#93;&#41;&#41;&#123;<br/>
        &nbsp;&nbsp;&nbsp;hightlight&#95;file&#40;&#36;&#95;SERVER&#91;&#39;SCRIPT&#95;FILENAME&#39;&#93;&#41;&#59;<br/>
        &nbsp;&nbsp;&nbsp;exit&#59;<br/>
        &nbsp;&nbsp;&#125;<br/><br/>
        
        &nbsp;&nbsp;function&nbsp;change&#95;data&#40;&#41;&#123;<br/>
        &nbsp;&nbsp;&#36;data&nbsp;&#61;&nbsp;&lt;&lt;&lt;FORM<br/>
        &nbsp;&nbsp;&lt;form&nbsp;action&#61;"#"&nbsp;method&#61;"post"&nbsp;style&#61;"text-align: right; width: 20%; font-family: fantasy;"&gt;<br/>
        &nbsp;&nbsp;&nbsp;Student&nbsp;ID&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentID"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Last&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentLastName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;First&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentFirstName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Middle&nbsp;Name&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentMiddleName"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Address&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentAddress"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Phone&#58;&lt;input&nbsp;type&#61;"tel"&nbsp;name&#61;"studentPhone"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Class&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentClass"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Date&nbsp;of&nbsp;Birth&#58;&lt;input&nbsp;type&#61;"date"&nbsp;name&#61;"studentDOB"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Pin&#58;&lt;input&nbsp;type&#61;"password"&nbsp;name&#61;"studentPin"&gt;&lt;br&gt;<br/>
        &nbsp;&nbsp;&nbsp;Faculty&nbsp;ID&#58;&lt;input&nbsp;type&#61;"text"&nbsp;name&#61;"studentFacultyID"&gt;&lt;br&gt;<br/>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeID&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentID"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeLastName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentLastName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeFirstName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentFirstName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeMiddleName&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentMiddleName"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeAddress&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentAddress"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changePhone&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentPhone"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeClass&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentClass"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeDOB&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentDOB"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changePin&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentPin"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&#36;changeFacultyID&nbsp;&#61;&nbsp;&#36;&#95;POST&#91;"studentFacultyID"&#93;&#59;<br/>
        &nbsp;&nbsp;&nbsp;&#125;<br/>
        &nbsp;&#63;&gt;<br />
        &nbsp;&lt;br&gt;&lt;br&gt;<br/>
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>
