
	<footer class="col-md-12">
		<div class="col-md-6 col-md-push-3" align="center">
			<h4> dejanos un mensaje u opinion</h4>
			<br>
			<button class="btn btn-info btn-responsive" id="contact" data-toggle="modal" data-target="#mensaje">contact</button>
		</div>
			
	<!-- contact mensaje modal -->
		<div id="mensaje" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
		    			<form class="msform" method="post" id="myform"  autocomplete="off">
			    			<legend class="fs-subtitle">complete</legend>

			    			<div class="input-group">
			    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    				<input name="from_name" type="text=" id="nombre"   placeholder="Name" onblur="validacionN()" required >
							</div>

							<div class="input-group">
			    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    					<input type="text"  id="apellido" placeholder="Lastname" onblur="validacionAp()" required >
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" name="email"  id="email"    placeholder="Email" onblur="validacionE()"  required>
							</div>

							<div class="input-group">
	 							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" id="mensje" name="message_html" placeholder="Enter your message" onblur="validacionM()" required>
							</div>

							<button class="btn btn-primary btn-responsive" id="enviarMensaje">send <span class="glyphicon glyphicon-send"></span></button>
						</form>
						<div class="modal-footer">
		        			<button type="button" class="btn btn-default btn-responsive" data-dismiss="modal">Close</button>
		      			</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	
	