incorrect=0,correct=0;
var ans=[1,2,2,1,1,1,2,2,1,2,2,2];
var givenans=new Array(12);
var flag=0;
for(var i=0;i<12;i++)
	givenans[i]=0;
function check(i) 
{
	givenans[i-1]=1;
}
function checkF(i) 
{
	givenans[i-1]=2;
}
function calcResult()
{
	correct=incorrect=0;
	for(var i=0;i<12;i++)
	{
		if(givenans[i]==ans[i])
			correct++;
		else if(givenans[i]!=0)
			incorrect++;
	}
	displayResult();
}
function displayResult() 
{
	document.resultForm.result.value=(correct+incorrect);
	document.resultForm.correctresult.value=(correct);
	document.resultForm.incorrectresult.value=(incorrect);
}