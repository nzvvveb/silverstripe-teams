<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
		<div class="content-container unit size3of4 lastUnit">
			<% if $getAllBlacksTeam %>
			<% with $getAllBlacksTeam %>
				<h2><strong>Name:</strong> $Name<br></h2>
				<strong>Type:</strong> $Type<br>
				<strong>Colour:</strong> $Colour<br>
				<strong>Mascot:</strong> $Mascot<br>
				<strong>Season:</strong> $Season<br>
				<% if $Players %>
					<strong>Players:</strong><br>
					<div class="content-container unit size3of4 lastUnit">
					<% loop $Players %>
						<strong>Name:</strong> $Firstname $Lastname<br>
					<% end_loop %>
					</div>
				<% end_if %>
			<% end_with %>
		<% end_if %>
		</div>
		<br>
		<div class="content-container unit size3of4 lastUnit">
			<% if $getJeffWilsonTeams.Count %>
				<hr>
				<h3>Jeff Wilson's Teams</h3>
				<% loop $getJeffWilsonTeams %>
					<div class="unit size3of3">
						<strong>Name:</strong> $Name<br>
						<strong>Type:</strong> $Type<br>
						<strong>Colour:</strong> $Colour<br>
						<strong>Mascot:</strong> $Mascot<br>
						<strong>Season:</strong> $Season<br>
					</div>
				<% end_loop %>
			<% end_if %>
		</div>


	</article>
		$Form
		$CommentsForm
</div>