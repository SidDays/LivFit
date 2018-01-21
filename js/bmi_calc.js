function calculateBmi() 
{
	var weight = document.bmiForm.weight.value;
	var height = document.bmiForm.height.value;
	document.getElementById("bmi_height_alert").innerHTML = "";
	document.getElementById("bmi_weight_alert").innerHTML = "";
	if(isNaN(weight) || !(weight>0)) {
		document.getElementById("bmi_weight_alert").innerHTML = "Invalid weight";
	}
	if(isNaN(height) || !(height>0)) {
		document.getElementById("bmi_height_alert").innerHTML = "Invalid height";
	}
	if(weight > 0 && height > 0)
	{	
		var finalBmi = Math.round(weight/(height/100*height/100)*100)/100;
		document.bmiForm.bmi.value = finalBmi;
		if(finalBmi < 18.5)
		{
			document.bmiForm.meaning.value = "You are underweight.";
		}
		if(finalBmi > 18.5 && finalBmi < 25)
		{
			document.bmiForm.meaning.value = "You are healthy.";
		}
		if(finalBmi > 25)
		{
			document.bmiForm.meaning.value = "You are overweight.";
		}
	}
}