create database StudentRecord;
use StudentRecord;

create table Student(
StudentID INT PRIMARY KEY,
FirstName varchar(255),
LastName varchar(255),
DateOfBirth DATE,
Email varchar(255),
Phone int NOT NULL
);

create table Course(
CourseID INT PRIMARY KEY,
CourseName varchar(255),
Credits varchar(255)
);

create table Instructor(
InstrutorID INT PRIMARY KEY,
FirstName varchar(255),
LastName varchar(255),
Email varchar(255),
Phone int NOT NULL
);

create table Enrollment(
EnrollmentID INT PRIMARY KEY,
StudentID INT, 
FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
CourseID INT, 
FOREIGN KEY (CourseID) REFERENCES Course(CourseID),
EnrollmentDate Date,
Grade int NOT NULL
);