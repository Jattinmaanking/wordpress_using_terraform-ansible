resource "aws_instance" "ansible-web" {
  ami           = "ami-053b0d53c279acc90"
  instance_type = "t2.micro"

  key_name = "ansible"

  vpc_security_group_ids = ["${aws_security_group.web-sg.id}"] 
  subnet_id                   = aws_subnet.public-subnet.id
  associate_public_ip_address = "true"

  tags = {
    Name = "ansible_master"
    env  = "dev"
  }
  user_data = file("ansible.sh")
  
  provisioner "file" {
    source = "wp-config.php"
    destination = "/tmp/wp-config.php"

    connection {
      type = "ssh"
      user = "ubuntu"
      private_key = file("${path.module}/ansible.pem")
      host = "${aws_instance.ansible-web.public_ip}"
    }
     
   }
   provisioner "file" {
    source = "mysql.yaml"
    destination = "/tmp/mysql.yaml"

    connection {
      type = "ssh"
      user = "ubuntu"
      private_key = file("${path.module}/ansible.pem")
      host = "${aws_instance.ansible-web.public_ip}"
    }
     
   }
 
}

resource "aws_instance" "wordpress-web" {
  ami           = "ami-053b0d53c279acc90"
  instance_type = "t2.micro"

  key_name = "wordpress"

  vpc_security_group_ids = ["${aws_security_group.web-sg.id}"]
  subnet_id                   = aws_subnet.public-subnet.id
  associate_public_ip_address = "true"

  tags = {
    Name = "wordpress"
    env  = "dev"
  }

  user_data = file("myscript.sh")

}