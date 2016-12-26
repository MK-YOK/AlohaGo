var actionCount = 0;

function mickeyAction() {

	$("#MickeyBalloon").css("visibility","visible");
	$("#MickeyImage").css("visibility","visible");

	var actionPattern = (actionCount === 0 ? 0 : actionCount % 3);

	switch (actionPattern) {
	case 0:
		$("#MickeyBalloon").html("Hi, I'm Mickey.");
		break;
	case 1:
		$("#MickeyBalloon").html("But it doesn't matter at all!!<br>" +
				"But it doesn't matter at all!!<br>" +
				"But it doesn't matter at all!!");
		break;
	case 2:
		$("#MickeyBalloon").html("Hi, OPPAPPI!!");
		break;
	default:
		alert ("Impossible path!! Something went wrong!!");
	}

	actionCount++;

}