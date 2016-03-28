var preloaderDotsDiv = document.getElementById("preloader-dots");

var preloaderDiv = document.getElementById("preloader");

setPreloaderTransparentOrDisplaynone();
showPreloader();

function hidePreloader()
{
	preloaderDiv.setAttribute("class", "displaynone");
}

function showPreloader()
{
	preloaderDiv.setAttribute("class", "");
}

function shiftUpPreloader()
{
	turnOffPreloaderDotsAnimation();
	$(preloaderDiv).stop().animate({bottom: "100%"}, 1000, function() {hidePreloader()});
}

function turnOffPreloaderDotsAnimation()
{
	preloaderDotsDiv.setAttribute("class", "preloader-dots-static");
}


function setPreloaderTransparentOrDisplaynone()
{
	if ((browserName == "internet explorer") && (browserVersion <= 8))
	{
		preloaderDiv.setAttribute("class", "displaynone");
		//alert("preloader displaynone");
	}
	else
	{
		preloaderDiv.setAttribute("class", "transparent");
		//alert("preloader transparent");
	}
}