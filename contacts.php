<?php
include('core/init.php');
include('libraries/Database.php');
?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `contacts`");

//Assign Result Set
$contacts = $db->resultset();
?>
<div class="row">
		<div class="large-12 columns">
            <div class="center">
                <img style="float: left;" src="img/logo.png" width="30" height="30" title="Logo of contacts" alt="Logo of contacts" />
                <h3 style="position: relative; left: 10px;">Contacts</h3>
            </div>
            <div class="large-12 columns">
                <form action="search.php" method="post">
                    <div class="large-6 columns">
                        Search <input type="text" name="search" placeholder="Enter First Name">
                    </div>
                    <div class="large-6 columns">
                        <input class="add-btn button right small" type ="submit">
                    </div>
                </form>
            </div>
			<table>
				<thead>
					<tr>
						<th width="230">Name</th>
						<th width="130">Phone</th>
						<th width="300">Email</th>
						<th width="300">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($contacts as $contact) : ?>
					<tr>
						<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->email; ?></td>
						<td>
							<ul class="button-group">
								<li style="width: 50%;">
									<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
									<div id = "editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
										<h2>Edit Contact</h2>
						<form id="editContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email; ?>" />
							  </label>
							</div>
							<div class="large-6 columns">
							  <label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone; ?>" />
							  </label>
							</div>
						  </div>
						  <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
									</div>
								</li>
								<li style="width: 50%;">
									<form id="deleteContact" action="#" method="post">
										<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
										<input type="submit" class="delete-btn button tiny secondary alert" value="Delete" />
									</form>
								</li>
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>