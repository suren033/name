<?php
	$conn = new mysqli("localhost", "root", "", "myDB");

	if ($conn->connection_error) {
		die ("Connection faild:" . $conn->error);
	}

	$sql = "INSERT INTO conf (name, value)
	VALUES ('Hello', 'Hello I\'m');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('myName', 'Alex Johnson');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('product', 'Product Designer');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('mail', 'getemail@email.com');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('phoneNumber' ,'+12 986 987 7867');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('gps', '37, Pollsatnd, New York, United State');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('aboutMe', 'About Me');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('patrick', 'Hello, Im a Patrick, web-developer based on Paris. I have rich experience in web site design & building and customization. Also I am good at');"; 
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('what', 'What I do');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('ul', 'Ul Design');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('webDevelopment', 'Web Development');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('appDevelopment', 'App Development');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('projects', 'Featured Projects');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('webDesign', 'Web Design');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('wrap', 'Wrap');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('designDevelopment', 'DESIGN & DEVELOPMENT');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('template', 'Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('shane', '-Shane Kavanagh');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('skills', 'Technical Skills');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('javascript', 'Javascript');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '86%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('java', 'Java');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '46%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('python', 'Python');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '38%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('php', 'PHP');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '17%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('ruby', 'Ruby');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '16%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('c', 'C');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('deg', '13%');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('professionalSkills', 'Professional Skills');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('communication', 'Communication');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('work', 'Team Work');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('management', 'Project Management');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('education', 'Education');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('art', 'Art & Multimedia From Oxford University');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('ux', 'UI/UX Designer IronSketch');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('responsibility', 'Responsibility :');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('validate', 'Validate CSS');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('management', 'Project Management');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('art', 'Art & Multimedia From Oxford University');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('art', 'Art & Multimedia From Oxford University');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('responsibility', 'Responsibility :');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('validate', 'Validate CSS');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('management', 'Project Management');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('art', 'Art & Multimedia From Oxford University');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('art', 'Art & Multimedia From Oxford University');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('num', '2005-2008');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('responsibility', 'Responsibility :');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('validate', 'Validate CSS');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('management', 'Project Management');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('interested', 'Interested to Work?');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('vel', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam littera gothica. quam nunc putamus parum claram,');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('posts', 'Featured Posts');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('life', 'A life without the daily traffic jams');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('post', 'Post On24.11.19 ByThemeSpiders');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('read', 'Read More');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('really', 'Proportion are what’s really needed');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('post', 'Post On24.11.19 ByThemeSpiders');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('read', 'Read More');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('paper', 'Mounts of paper work to remember the way');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('post', 'Post On24.11.19 ByThemeSpiders');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('long', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout');";
	$sql .= "INSERT INTO conf (name, value)
	VALUES ('read', 'Read More');";


	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "faild" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>