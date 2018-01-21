function setDate()
{
	var jyr=<?php echo $yr ?>;
	var jmt=<?php echo $mt ?>;
	var jdt=<?php echo $dt ?>;
	
	var ylist=document.eform.birthday_year;
	for(i=0;i<ylist.options.length;i++)
	{    
		if (ylist.options[i].value==jyr)
		{
			ylist.options[i].selected=true;
			break;
		}
	}
	var mlist=document.eform.birthday_month;
	for(i=0;i<mlist.options.length;i++)
	{    
		if (mlist.options[i].value==jmt)
		{
			mlist.options[i].selected=true;
			break;
		}
	}
	var dlist=document.eform.birthday_day;
	for(i=0;i<dlist.options.length;i++)
	{    
		if (dlist.options[i].value==jdt)
		{
			dlist.options[i].selected=true;
			break;
		}
	}
}
