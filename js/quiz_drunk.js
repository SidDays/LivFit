function compute() {
				score=0;
				for(var j=1; j<=6; j++) {
					var points = document.getElementsByName("opt"+(''+j));
					for (var i=0; i<points.length;i++) {
						if(points[i].checked==true)
						{
							score = score + i%3;
						}
					}
				}
				//alert('You scored '+score+' points.');
				var resultMsg;
				if(score<4) {
					resultMsg = "You are most likely sober.\nCongratulations!";
				}
				else if(score<8) {
					resultMsg = "The amount of alcohol you've consumed is worrisome.\nGo a little easy there tiger, maybe that's enough.";
				}
				else {
					resultMsg = "It's a surprise why you haven't already passed out.\nCall a friend to take you home!";
				}
				//alert(resultMsg);
				var res = document.getElementById("result");
				res.innerHTML = resultMsg;
            }