
# 1) create the main VPC
resource "aws_vpc" "main-vpc" {
  cidr_block       = "10.0.0.0/16"
  instance_tenancy = "default"

  tags = {
    Name = "main-vpc"
  }
}

# 2) create public subnet for the main VPC

resource "aws_subnet" "public-subnet" {
  vpc_id     = aws_vpc.main-vpc.id
  cidr_block = "10.0.1.0/24"

  tags = {
    Name = "public-subnet"
  }
}

# 3) create internet gateway and connect to main VPC 

resource "aws_internet_gateway" "internet-gw" {
  vpc_id = aws_vpc.main-vpc.id

  tags = {
    Name = "internet-gw"
  }
}

# 4) create route tab for Subnet

resource "aws_route_table" "Public-subnet-rt" {
  vpc_id = aws_vpc.main-vpc.id

  route {
    cidr_block = "0.0.0.0/0"
    gateway_id = aws_internet_gateway.internet-gw.id
  }

  tags = {
    Name = "Punlic-subnet-rt"
  }
}

# 5) link the route table to subnet

resource "aws_route_table_association" "public-route-table-link" {
  subnet_id      = aws_subnet.public-subnet.id
  route_table_id = aws_route_table.Public-subnet-rt.id
}