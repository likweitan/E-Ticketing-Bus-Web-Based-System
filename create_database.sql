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

CREATE TABLE address
(
    AddressNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Address1 varchar(50) NOT NULL,
    Address2 varchar(50) NULL,
    Country varchar(50) NOT NULL,
    State varchar(50) NOT NULL,
    Zip int NOT NULL,
    AddressType varchar(50) NOT NULL,
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo)
);

CREATE TABLE payment
(
    PaymentNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    PaymentType varchar(50) NOT NULL,
    CardName varchar(50) NOT NULL,
    CardNumber int NOT NULL,
    CardExpiration varchar(50) NOT NULL,
    CVV int NOT NULL,
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo)
);

CREATE TABLE activity
(
    ActivityNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    ActivityTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE booking
(
    BookingNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    AccountNo int NOT NULL,
    BusNo varchar(50) NOT NULL,
    PromoCode varchar(50) NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    FOREIGN KEY (BusNo) REFERENCES account(BusNo),
    BookingTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE promo_code
(
    PromoCode varchar(50) NOT NULL PRIMARY KEY,
    PromoCodeDescription varchar(50) NOT NULL,
    PromoCodeEndTimestamp date NOT NULL,
    PromoCodeStartTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE bus
(
    BusNo int NOT NULL PRIMARY KEY,
    BusRoute varchar(50) NOT NULL,
    BusCapacity int NOT NULL
);

INSERT INTO account (FirstName, LastName, Email, Gender, BirthDate, AccountRole, MaritalStatus, Nationality)
VALUES (LIK WEI", "TAN", "likweitan@gmail.com", "male", "1998-04-08", "admin", "single", "malaysian");