create database Zarate;
use Zarate;

create table Users(
UserID INT PRIMARY KEY,
username varchar(255),
email varchar(255),
password varchar(255)
)

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
InstructorID INT PRIMARY KEY,
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

insert into Student(StudentID,FirstName,LastName,DateOfBirth,Email,Phone)
values (219901, "Ayaka", "Kamisato", "2002-12-03", "Ayaka13@gmail.com", 090912397);


insert into Course(CourseID,CourseName,Credits)
values (110011, "CIT17", "3");


insert into Instructor(InstructorID,FirstName,LastName,Email,Phone)
values (101, "Bennett", "Hadulipiosstt", "Benne1@gmail.com", 090412578);


insert into Enrollment(EnrollmentID,StudentID,CourseID,EnrollmentDate,Grade)
values (111, 219901, 110011, "2021-11-01", 91);
