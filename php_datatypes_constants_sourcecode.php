<!DOCTYPE html>
<html>
<head><title>PHP Programming_Data Types and Constants</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Data Types and Constants&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
        &nbsp;&lt;?php<br />
        &nbsp;&nbsp;define&#40;"randomString"&#44;&nbsp;"This is a random string&#46;&lt;br&gt;"&#41;&#59;<br />
        &nbsp;&nbsp;print&nbsp;randomString&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;constString&nbsp;&#61;&nbsp;"This is another random string&#46;&lt;br&gt;&lt;br&gt;"&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"Print&#58; "&#44;&nbsp;&#36;constString&#59;<br /><br />
        
        &nbsp;&nbsp;define&#40;"randomFloat"&#44;&nbsp;1&#46;234&#41;&#59;<br />
        &nbsp;&nbsp;print&nbsp;randomFloat&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&#44; a random float&#46;&#46;&#46;"&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;constFloat&nbsp;&#61;&nbsp;3&#46;21&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br&gt;Print another random float&#58;&nbsp;"&#44;&nbsp;&#36;constFloat&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br /><br />
        
        &nbsp;&nbsp;define&#40;"randomInteger"&#44;&nbsp;5&#41;&#59;<br />
        &nbsp;&nbsp;print&nbsp;randomInteger;<br />
        &nbsp;&nbsp;echo&nbsp;"&#44; a random integer&#46;&#46;&#46;"&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;constInteger&nbsp;&#61;&nbsp;7&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br&gt;Print another random integer&#58;&nbsp;"&#44;&nbsp;&#36;constInteger&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;name&nbsp;&#61;"Erica"&#59;<br/>
        &nbsp;&nbsp;define&#40;&#39;Intro&#39;&#44;&nbsp;"Hello&#44;&nbsp;hello&#46;&#46;&#46;&nbsp;My name is &#36;&#123;name&#125;&#46;"&#41;&#59;<br />
        &nbsp;&nbsp;echo&nbsp;Intro&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br&gt;This is a random introduction&#46;&lt;br&gt;"&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;integer&nbsp;&#61;&nbsp;3&#59;<br />
        &nbsp;&nbsp;&#36;float&nbsp;&#61;&nbsp;4&#46;56;<br />
        &nbsp;&nbsp;&#36;stringOne&nbsp;&#61;&nbsp;"This is a double-quoted string&#46;"&#59;<br />
        &nbsp;&nbsp;&#36;boolean&nbsp;&#61;&nbsp;true&#59;<br />
        &nbsp;&nbsp;&#36;stringTwo&nbsp;&#61;&nbsp;&#39;This is a single-quoted string&#46;&#39;&#59;<br />
        &nbsp;&nbsp;&#36;variableExpansion&nbsp;&#61;&nbsp;"&#36;stringOne with an expansion with the integer &#36;integer"&#59;<br /><br />
        
        &nbsp;&nbsp;&#36;intvar&nbsp;&#61;&nbsp;2&#59;<br />
        &nbsp;&nbsp;&#36;floatvar&nbsp;&#61;&nbsp;4.4&#59;<br />
        &nbsp;&nbsp;&#36;string&nbsp;&#61;&nbsp;"1 is the loneliest number"&#59;<br />
        &nbsp;&nbsp;&#36;thisvar&nbsp;&#61;&nbsp;&#36;intvar&nbsp;&#43;&nbsp;&#40;int&#41;&#36;string&#59;<br />
        &nbsp;&nbsp;&#36;that&nbsp;&#61;&nbsp;&#36;floatvar&nbsp;&#45;&nbsp;&#40;int&#41;&#36;string&#59;<br />
        &nbsp;&nbsp;&#36;other&nbsp;&#61;&nbsp;&#36;intvar&nbsp;&#42;&nbsp;&#36;floatvar&#59;<br />
        &nbsp;&nbsp;&#36;what&nbsp;&#61;&nbsp;"&#36;intvar"&#59;<br /><br />
        
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;integer is&#58;&#39;&#46;gettype&#40;&#36;integer&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;float is&#58;&#39;&#46;gettype&#40;&#36;float&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;stringOne is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;stringOne&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;boolean is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;boolean&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;stringTwo is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;stringTwo&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;variableExpansion is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;variableExpansion&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;intvar is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;intvar&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;floatvar is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;floatvar&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;string is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;string&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;thisvar is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;thisvar&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;that is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;that&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;other is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;other&#41;&#59;<br />
        &nbsp;&nbsp;print&#39;&lt;br&gt;The type of the variable &#36;what is&#58;&nbsp;&#39;&#46;gettype&#40;&#36;what&#41;&#59;<br /><br /><br />
        
        &nbsp;//My observations about variables: variable names should be choosen based on the subject of the assigned value; the variable name should have some &nbsp;relation to the assigned value to make it easy to identify if the variable is used multiple times<br />
        &nbsp;//My observations about data types: since there are many different data types, keeping your data types organized can be helpful; grouping each data type &nbsp;can assist with identifying the data type and its assigned value particularly if its used multiple times<br />
        &nbsp;//My observations about data type conversion: data type conversions can be used to change a data type to another; for example, a data type with a &nbsp;numerical value and a data type with a string value cannot be mathematically compiled unless there is a data type conversion; if a data type needs to be &nbsp;changed, data type conversions could assist without having to locate a particular data type especially if the data type is used several times and amongst &nbsp;multiple lines of code<br />
        &nbsp;//My observations about the differences between a single and double quoted strings: when a single quoted string is created with a variable, the compiler &nbsp;displays the string with the variables data type; when a double quoted string is created with a variable, the compiler displays the string and the &nbsp;variables assigned value<br /><br />
        
        &nbsp;echo "&lt;br&gt;"&#59;<br /><br />
        &nbsp;//Addtional displays of functions used in PHP<br />
        &nbsp;function&nbsp;aFunction&#40;&#41;<br />
        &nbsp;&#123;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br&gt;This is a string&#46;&lt;br&gt;"&#59;<br />
        &nbsp;&#125;<br />
        &nbsp;aFunction&#40;&#41;&#59;<br />
        &nbsp;function&nbsp;anotherFunction&#40;&#36;variable&#41;<br />
        &nbsp;&#123;<br />
        &nbsp;&nbsp;echo&nbsp;"&#36;variable is a another string&#46;&lt;br&gt;"&#59;<br />
        &nbsp;&#125;<br />
        &nbsp;anotherFunction&#40;"This"&#41;&#59;<br />
        &nbsp;&#63;&gt;<br />
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>