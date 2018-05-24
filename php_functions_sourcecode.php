<!DOCTYPE html>
<html>
<head><title>PHP Programming_Functions</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Functions&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
             &nbsp;&lt;&#63;php<br /><br /> 
             &nbsp;&#36;animalName&#95;animalSound&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;animal_sound&#39;&#93;&#59;<br />
             &nbsp;&#36;name_sound&nbsp;&#61;&nbsp;explode&#40;":"&#44;&nbsp;&#36;animalName_animalSound&#41;&#59;<br />
             &nbsp;echo&nbsp;"Old MacDonald had a farm, E-I-E-I-O!&lt;br&gt;"<br />
             &nbsp;printOneVerse&#40;&#36;name&#95;sound&#91;0&#93;&#44;&nbsp;&#36;name&#95;sound&#91;1&#93;&#41;&#59;<br />
             &nbsp;echo&nbsp;"Old MacDonald had a farm, E-I-E-I-O!&lt;br&gt;"&#59;<br /><br />
             &nbsp;function&nbsp;printOneVerse&#40;&#36;animalName&#44;&nbsp;&#36;animalSound&#41;&#123;<br />
             &nbsp;&nbsp;echo&nbsp;"And on that farm he had a "&#44;&nbsp;&#36;animalName&#44;&nbsp;", E-I-E-I-O!&lt;br&gt;"&#59;<br />
             &nbsp;&nbsp;echo&nbsp;"With a "&#44;&nbsp;&#36;animalSound&#44;"-"&#44;&#36;animalSound&#44;" here and a "&#44;&nbsp;&#36;animalSound&#44;"-"&#44;&#36;animalSound&#44;" there&lt;br&gt;"&#59;<br />
             &nbsp;&nbsp;echo&nbsp;"Here a "&#44;&nbsp;&#36;animalSound&#44;&nbsp;", there a "&#44;&nbsp;&#36;animalSound&#44;&nbsp;", everywhere a "&#44;&nbsp;&#36;animalSound&#44;"-"&#44;&#36;animalSound&#44;"&lt;br&gt;"&#59;<br />
             &nbsp;&#125;<br />
             &nbsp;&#63;&gt;<br />
             &nbsp;&lt;br&gt;&lt;br&gt;<br />    
        &nbsp;&lt;a&nbsp;href&#61;"https&#58;//hills&#46;ccsf&#46;edu/&#126;eandrew6/php&#95;functions&#46;html"&gt;Click&nbsp;here&nbsp;to&nbsp;return&nbsp;to&nbsp;the&nbsp;original&nbsp;form&lt;/a&gt;&lt;br/&gt;<br/>
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>