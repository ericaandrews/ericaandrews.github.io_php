<!DOCTYPE html>
<html>
<head><title>PHP Programming_Arrays and Associative Arrays</title></head>   
<body>
    <code>
        &lt;html&gt;<br />
        &lt;head&gt;<br />
        &nbsp;&lt;title&gt;PHP Programming_Arrays and Associative Arrays&lt;/title&gt;<br />
        &lt;/head&gt;<br />
        &lt;body&gt;<br />
        &nbsp;&lt;?php<br />
        &nbsp;&nbsp;&#36;ceu&nbsp;&#61;&nbsp;array&#40;"Italy"&#61;&gt;"Rome"&#44;&nbsp;"Luxembourg"&#61;&gt;"Luxembourg"&#44;&nbsp;"Belgium"&#61;&gt;"Brussels"&#44;&nbsp;"Denmark"&#61;&gt;"Copenhagen"&#44;&nbsp;"Finland"&#61;&gt;"Helsinki"&#44;&nbsp;"France"&#61;&gt;"Paris"&#44;&nbsp;"Slovakia"&#61;&gt;"Bratislava"&#44;&nbsp;"Slovenia"&#61;&gt;"Ljubljana"&#44;&nbsp;"Germany"&#61;&gt;"Berlin"&#44;&nbsp;"Greece"&#61;&gt;"Athens"&#44;&nbsp;"Ireland"&#61;&gt;"Dublin"&#44;&nbsp;"Netherlands"&#61;&gt;"Amsterdam"&#44;&nbsp;"Portugal"&#61;&gt;"Lisbon"&#44;&nbsp;"Spain"&#61;&gt;"Madrid"&#44;&nbsp;"Sweden"&#61;&gt;"Stockholm"&#44;&nbsp;"United Kingdom"&#61;&gt;"London"&#44;&nbsp;"Cyprus"&#61;&gt;"Nicosia"&#44;&nbsp;"Lithuania"&#61;&gt;"Vilnius"&#44;&nbsp;"Czech&nbsp;Republic"&#61;&gt;"Prague"&#44;&nbsp;"Estonia"&#61;&gt;"Tallin"&#44;&nbsp;"Hungary"&#61;&gt;"Budapest"&#44;&nbsp;"Latvia"&#61;&gt;"Riga"&#44;&nbsp;"Malta"&#61;&gt;"Valetta"&#44;&nbsp;"Austria"&#61;&gt;"Vienna"&#44;&nbsp;"Poland"&#61;&gt;"Warsaw"&#41;&#59;<br /><br />
        &nbsp;&nbsp;echo&nbsp;"Task 1&#58;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"The capital of Netherlands is &#123;&#36;ceu&#91;&#39;Netherlands&#39;&#93;&#125;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"The capital of Greece is &#123;&#36;ceu&#91;&#39;Greece&#39;&#93;&#125;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"The capital of Germany is &#123;&#36;ceu&#91;&#39;Germany&#39;&#93;&#125;&lt;br/&gt;&lt;br/&gt;"&#59;<br /><br />
        &nbsp;&nbsp;echo&nbsp;"Task 2&#58;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;ksort&#40;&#36;ceu&#41;&#59;<br />
        &nbsp;&nbsp;print&#95;r&#40;&#36;ceu&#41;&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br/&gt;&lt;br/&gt;"&#59;<br /><br />
        &nbsp;&nbsp;echo&nbsp;"Task 3&#58;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;&#36;temparray&nbsp;&#61;&nbsp;&#36;ceu&#59;<br />
        &nbsp;&nbsp;sort&#40;&#36;temparray&#41;&#59;<br />
        &nbsp;&nbsp;print&#95;r&#40;&#36;temparray&#41;&#59;<br />
        &nbsp;//My observations of sorting an array by key: the array sorted by key displays the key index in "sorted order"&#59;<br />
        &nbsp;//My observations of sorting an array by value: the array sorted by value displays the value in "sorted order" and a numerical index&#59;<br /><br />
        &nbsp;&nbsp;&#36;array&#91;1&#93;&nbsp;&#61;&nbsp;&#91;"number"&#61;&gt;"One"&#44;&nbsp;&#39;numeric&#39;&#61;&gt;1&#93;;<br />
        &nbsp;&nbsp;&#36;array&#91;2&#93;&nbsp;&#61;&nbsp;&#91;"number"&#61;&gt;"Two"&#44;&nbsp;&#39;numeric&#39;&#61;&gt;2&#93;;<br />
        &nbsp;&nbsp;&#36;array&#91;3&#93;&nbsp;&#61;&nbsp;&#91;"number"&#61;&gt;"Three"&#44;&nbsp;&#39;numeric&#39;&#61;&gt;3&#93;;<br />
        &nbsp;&nbsp;&#36;array&#91;4&#93;&nbsp;&#61;&nbsp;&#91;"number"&#61;&gt;"Four"&#44;&nbsp;&#39;numeric&#39;&#61;&gt;4&#93;;<br />
        &nbsp;&nbsp;&#36;array&#91;5&#93;&nbsp;&#61;&nbsp;&#91;"number"&#61;&gt;"Five"&#44;&nbsp;&#39;numeric&#39;&#61;&gt;5&#93;;<br />
        &nbsp;&nbsp;&#36;array&nbsp;&#61;&nbsp;&#91;&#36;array&#91;1&#93;&#44;&nbsp;&#36;array&#91;2&#93;&#44;&nbsp;&#36;array&#91;3&#93;&#44;&nbsp;&#36;array&#91;4&#93;&#44;&nbsp;&#36;array&#91;5&#93;&#93;&#59;<br /><br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br/&gt;&lt;br/&gt;Task 4&#58;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;print&#95;r&#40;&#36;array&#41;&#59;<br />
        &nbsp;&nbsp;&#36;mynewarray&nbsp;&#61;&nbsp;&#91;&#36;array&#91;3&#93;&#44;&nbsp;&#36;array&#91;4&#93;&#93;&#59;<br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br/&gt;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;print&#95;r&#40;&#36;mynewarray&#41;&#59;<br />
        &nbsp;//My observations of creating arrays: when creating multi-dimensional arrays, it is great practice to create a step by step process; it can become slightly confusing when adding arrays as assignments to an array&#59;<br /><br />
        &nbsp;&nbsp;echo&nbsp;"&lt;br/&gt;&lt;br/&gt;Task 5&#58;&lt;br/&gt;"&#59;<br />
        &nbsp;&nbsp;&#36;ceu&nbsp;&#61;&nbsp;array&#95;diff&#40;&#36;ceu&#44;&#91;"Vilnius"&#93;&#41;&#59;<br />
        &nbsp;&nbsp;print&#95;r&#40;&#36;ceu&#41;&#59;<br />
        &nbsp;&#63;&gt;<br />
        &lt;/body&gt;<br />
        &lt;/html&gt;<br />
    </code>
</body>    
</html>