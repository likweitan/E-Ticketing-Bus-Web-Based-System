CREATE TABLE account
(
	AccountNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Email varchar(50) NOT NULL,
	Gender varchar(50) NOT NULL,
	BirthDate date NOT NULL,
	AccountRole varchar(50) NOT NULL,
	MaritalStatus varchar(50) NOT NULL,
	Religion varchar(50) NOT NULL,
	Race varchar(50) NOT NULL,
	Nationality varchar(50) NOT NULL DEFAULT 'Malaysian',
    AccountTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE login_activity
(


);

CREATE TABLE booking
(
    BookingNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    BookingTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE bus
(
    BusNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    BusRoute varchar(50) NOT NULL,
    BusCapacity int NOT NULL,
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    BusTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);