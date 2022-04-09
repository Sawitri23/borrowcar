<script language="JavaScript1.2">
//change speed to another integer to alter the scrolling speed. Greater is faster
var speed=2
var currentpos=0,alt=1,curpos1=0,curpos2=-1
function initialize(){
startit()
}
function scrollwindow(){
if (document.all)
temp=document.body.scrollLeft
else
temp=window.pageXOffset
if (alt==0)
alt=1
else
alt=0
if (alt==0)
curpos1=temp
else
curpos2=temp
if (curpos1!=curpos2){
if (document.all)
currentpos=document.body.scrollLeft+speed
else
currentpos=window.pageXOffset+speed
window.scroll(currentpos,0)
}
else{
currentpos=0
window.scroll(currentpos,0)
}
}
function startit(){
setInterval("scrollwindow()",10)
}
window.onload=initialize
</script>