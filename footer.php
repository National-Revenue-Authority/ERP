	<footer class="text-center">
		Copyright &copy National Revenue Authority - Republic of South Sudan <script>document.write(new Date().getFullYear())</script>. All Rights Reserved | 
		<a href="">Privacy Policy.</a>
	</footer>

	<script src="assets/calendar/calendar/moment.min.js"></script>
	<script src="assets/calendar/calendar/fullcalendar.js"></script>

	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>

	<script type = "text/javascript">
		$(document).ready(function(){
			$('.remove_log').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'delete_log.php?id='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
		});
	</script>

	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
				},
				
				navLinks: true, // can click day/week names to navigate views

				weekNumbers: true,
				weekNumbersWithinDays: true,
				weekNumberCalculation: 'ISO',

				editable: true,
				eventLimit: true, // allow "more" link when too many events
				
			});

		});

	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>