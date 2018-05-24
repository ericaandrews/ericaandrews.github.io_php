<!DOCTYPE html>
<html>
<head><title>PHP Programming_Conditional Statements</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Conditional&nbsp;Statements&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
            &nbsp;&lt;&#63;php<br/>
                &nbsp;&nbsp;&#36;bc&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;backgroundcolor&#39;&#93;&#59;<br/>
                &nbsp;&nbsp;&#36;tc&nbsp;&#61;&nbsp;&#36;&#95;REQUEST&#91;&#39;textcolor&#39;&#93;&#59;<br/>
                <br/>
                &nbsp;&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"black"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                  &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"blue"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
            
                 &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"brown"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
        
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"green"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
        
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"orange"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
        
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"purple"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
        
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"red"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
        
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"white"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"yellow"&nbsp;&amp;&amp;&nbsp;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Error&#58;&nbsp;The background color and text color cannot be the same&#46; Please select variation between background color and text color&#46;&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;black"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;blue"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>       
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;brown"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/> 
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;green"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;orange"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;purple"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;red"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;white"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
                &nbsp;&nbsp;else&nbsp;if&#40;&#36;bc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;body&nbsp;style&#61;"background&#45;color&#58;&nbsp;yellow"&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;echo&nbsp;"Desired background color choosen&#58;&nbsp;"&#44;&nbsp;&#36;bc&#44;&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/><br/>
                    
                 &nbsp;&nbsp;&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"black"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;black"&gt;Desired text color choosen&#58;&nbsp;black&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else&nbsp;if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"blue"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;blue"&gt;Desired text color choosen&#58;&nbsp;blue&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"brown"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;brown"&gt;Desired text color choosen&#58;&nbsp;brown&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"green"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;green"&gt;Desired text color choosen&#58;&nbsp;green&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"orange"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;orange"&gt;Desired text color choosen&#58;&nbsp;orange&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"purple"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;purple"&gt;Desired text color choosen&#58;&nbsp;purple&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"red"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;red"&gt;Desired text color choosen&#58;&nbsp;red&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"white"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;white"&gt;Desired text color choosen&#58;&nbsp;white&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
        
                 &nbsp;&nbsp;&nbsp;else if&#40;&#36;tc&nbsp;&#61;&#61;&nbsp;"yellow"&#41;&#123;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&#39;&lt;p&nbsp;style&#61;"color&#58;&nbsp;yellow"&gt;Desired text color choosen&#58;&nbsp;yellow&lt;/p&gt;&#39;&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;br&gt;&lt;br&gt;"&#59;<br/>
                 &nbsp;&nbsp;&nbsp;&#125;<br/>
                 &nbsp;&nbsp;&#125;<br/>
                <br/>
        
            &nbsp;&#63;&gt;
            &nbsp;&lt;a&nbsp;href&#61;"https&#58;//hills&#46;ccsf&#46;edu/&#126;eandrew6/php&#95;conditional&#95;statements&#46;html"&gt;Click&nbsp;here&nbsp;to&nbsp;return&nbsp;to&nbsp;the&nbsp;original&nbsp;form&lt;/a&gt;&lt;br/&gt;<br/>
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>