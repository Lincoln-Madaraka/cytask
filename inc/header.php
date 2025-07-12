<header class="header">
	<div class="left-header">
	<h2 class="u-name">
	<img src="img/logo.png" alt="CyTask Logo" style="height:24px; vertical-align:middle; margin-right:5px;">
	Cy<b>Task</b>
	</h2>
	</div>
	<div class="right-header">
	<span class="notification" id="notificationBtn">
		<i class="fa fa-bell" aria-hidden="true"></i>
		<span id="notificationNum"></span>
	</span>
	<label for="checkbox">
      <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
    </label>
	</div>
</header>
<div class="notification-bar" id="notificationBar">
	<ul id="notifications">
	
	</ul>
</div>
<script type="text/javascript">
	var openNotification = false;

	const notification = ()=> {
		let notificationBar = document.querySelector("#notificationBar");
		if (openNotification) {
			notificationBar.classList.remove('open-notification');
			openNotification = false;
		}else {
			notificationBar.classList.add('open-notification');
			openNotification = true;
		}
	}
	let notificationBtn = document.querySelector("#notificationBtn");
	notificationBtn.addEventListener("click", notification);
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){

       $("#notificationNum").load("app/notification-count.php");
       $("#notifications").load("app/notification.php");

   });
</script>