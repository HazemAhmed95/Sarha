<div ng-controller="UserController" ng-init="findOne()">
	
	<div class="container p-t-md">
		<div class="col-md-12" style="padding-top:50px;">
			<div class="panel panel-default panel-profile m-b-md">
				<div class="panel-body text-center"> <img data-action="zoom" class="panel-profile-img" src="https://hazemahmed95.sarahah.com/img/avatar.png" />
					<h5 class="panel-title">
                <span class="text-inherit">
                    {{user.username}}   </span>
        </h5>
					<div id="Container" class="text-center">
						<div>
							<br />
							<p id="message"> يعنى هى جت عليك :)</p>
						</div>
						<form class="form-horizontal">
							<div class="row">
								<div class="col-md-12">
									<div id="TextContainer" class="textarea-container">
										<textarea rows="5" maxlength="700" class="form-control remove-border" style="background:none;" id="Text" name="Text"> </textarea>
									</div>
									<button id="Send" class="btn btn-primary-outline" type="button" onclick="SendMessage()" style="margin-top:10px" data-loading-text="wait for it..."> ابعت</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
