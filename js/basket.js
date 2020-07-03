window.onload = function() {
				var textday = document.getElementById("day");
				var butconfirm = document.getElementById("confirm");
				butconfirm.onclick = function() {
					if(textday.value == "12月26号")
						alert("没错，答对了");
					else
						alert("你记错了，正确的日期是12月26日");

				}

			}