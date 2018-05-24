<!DOCTYPE html>
<html>
<head><title>PHP Programming_Repetition Using Loops</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Repetition&nbsp;Using&nbsp;Loops&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
           &nbsp;&lt;&#63;php<br/>         &nbsp;&#36;size&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;size&#39;&#93;&#59;<br />
           &nbsp;echo&nbsp;&#39;&lt;table&nbsp;style&#61;"border&#58;&nbsp;1px&nbsp;solid&nbsp;black&#59;&nbsp;border-collapse&#58;&nbsp;collapse&#59;"&gt;&#39;&#59;<br />
           &nbsp;echo&nbsp;&#39;&lt;tr&gt;&#39;&#59;<br />
           &nbsp;multiplication&#40;&#36;size&#41;&#59;<br />
           &nbsp;echo&nbsp;&#39;&lt;/table&gt;&#39;&#59;<br />
           <br/>
           &nbsp;function&nbsp;multiplication&#40;&#36;size&#41;&#123;<br />
           &nbsp;&nbsp;if&#40;&#36;size&nbsp;&lt;&#61;&nbsp;0&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;"Please enter a numeric value between 1 and 10."&#59;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br />
            &nbsp;&nbsp;&#125;<br />
            &nbsp;&nbsp;else&nbsp;if&#40;&#36;size&nbsp;&gt;&nbsp;10&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;"Please enter a numeric value between 1 and 10."&#59;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br />
            &nbsp;&nbsp;&#125;<br />
            
            &nbsp;&nbsp;else&nbsp;if&#40;&#36;size&nbsp;&gt;&#61;&nbsp;0&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;tr&gt;&#39;&#59;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;for&#40;&#36;c&nbsp;&#61;&nbsp;0&#59;&nbsp;&#36;c&nbsp;&lt;&#61;&nbsp;&#36;size&#59;&nbsp;&#36;c&#43;&#43;&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;td&nbsp;style&#61;"border&#58;&nbsp;1px&nbsp;solid&nbsp;black&#59;&nbsp;border-collapse&#58;&nbsp;collapse&#59;&nbsp;padding&#58;&nbsp;10px&#59;"&gt;&#39;&#44;&#36;c&#59;&#39;&lt;td/&gt;&#39;&#59;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&#125;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;/tr&gt;&#39;&#59;<br />
            &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;tr&gt;&#39;&#59;<br />
            &nbsp;&nbsp;&nbsp;for&#40;&#36;r&nbsp;&#61;&nbsp;1&#59;&nbsp;&#36;r&nbsp;&lt;&#61;&nbsp;&#36;size&#59;&nbsp;&#36;r&#43;&#43;&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;td&nbsp;style&#61;"border&#58;&nbsp;1px&nbsp;solid&nbsp;black;&nbsp;border-collapse&#58;&nbsp;collapse&#59;&nbsp;padding&#58;&nbsp;10px&#59;"&gt;&#39;&#44;&#36;r&#59;&#39;&lt;td/&gt;&#39;&#59;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;for&#40;&#36;c&nbsp;&#61;1&#59;&nbsp;&#36;c&nbsp;&lt;&#61;&nbsp;&#36;size&#59;&nbsp;&#36;c&#43;&#43;&#41;&#123;<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#36;array&#91;&#36;r&#93;&#91;&#36;c&#93;&#61;&#36;r&#42;&#36;c&#59;<br />
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;td&nbsp;style&#61;"border&#58;&nbsp;1px&nbsp;solid&nbsp;black&#59;&nbsp;border-collapse&#58;&nbsp;collapse&#59;&nbsp;padding&#58;&nbsp;10px&#59;"&gt;&#39;&#44;&#36;r&#44;"&nbsp;&#42;&nbsp;"&#44;&#36;c&#44;&nbsp;"&nbsp;&#61;&nbsp;"&#44;&#36;array&#91;&#36;r&#93;&#91;&#36;c&#93;&#59;&#39;&lt;td/&gt;&#39;&#59;<br />
             &nbsp;&nbsp;&nbsp;&nbsp;&#125;<br />
             &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;/tr&gt;&#39;&#59;<br />
             &nbsp;&nbsp;&nbsp;&#125;<br />
             &nbsp;&nbsp;&nbsp;return&nbsp;&#36;array&#59;<br />
             &nbsp;&nbsp;&#125;<br />
             &nbsp;&#125;<br />
             &nbsp;&#63;&gt;<br />
             &nbsp;&lt;br&gt;&lt;br&gt;<br />    
        &nbsp;&lt;a&nbsp;href&#61;"https&#58;//hills&#46;ccsf&#46;edu/&#126;eandrew6/php&#95;repetition&#95;usingloops&#46;html"&gt;Click&nbsp;here&nbsp;to&nbsp;return&nbsp;to&nbsp;the&nbsp;original&nbsp;form&lt;/a&gt;&lt;br/&gt;<br/>
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>