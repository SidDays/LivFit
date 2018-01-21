// alert("javaScript is working.");

// Login

function validateFeedback()
{
	var feedback = document.feedbackform.feedbackText.value;
	var feedbackAlert = document.getElementById("feedback_alert");
	
	feedbackAlert.innerHTML = "";
	if(feedback.length < 5)
	{
		feedbackAlert.innerHTML = "Too little feedback.";                        
		return false;
	}

	return true;
}
