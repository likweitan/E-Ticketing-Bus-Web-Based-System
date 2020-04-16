USE s900_database;
CREATE TABLE account
(
	AccountNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Email varchar(50) NOT NULL,
    Password varchar(50) NOT NULL,
	Gender varchar(50) NOT NULL,
	BirthDate date NOT NULL,
	AccountRole varchar(50) NOT NULL,
	Nationality varchar(50) NOT NULL DEFAULT 'Malaysian',
    AccountTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE address_line
(
    AddressNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
    Address1 varchar(50) NOT NULL,
    Address2 varchar(50) NULL,
    AddressCountry varchar(50) NOT NULL,
    AddressState varchar(50) NOT NULL,
    AddressZip int NOT NULL,
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

CREATE TABLE login_activity
(
    ActivityNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ActivityName varchar(50),
    AccountNo int NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    ActivityTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
    BusNo varchar(50) NOT NULL PRIMARY KEY,
    BusCompany varchar(50) NOT NULL,
    BusCapacity int NOT NULL
);

CREATE TABLE bus_schedule
(
    ScheduleNo varchar(50) NOT NULL PRIMARY KEY,
    BusNo varchar(50) NOT NULL,
    ScheduleDepart varchar(50) NOT NULL,
    ScheduleArrive varchar(50) NOT NULL,
    ScheduleStartTime TIME NOT NULL,
    ScheduleDuration int(50) NOT NULL,
    TicketPrice float(10) NOT NULL, 
    FOREIGN KEY (BusNo) REFERENCES bus(BusNo)
);

CREATE TABLE booking
(
    BookingNo varchar(50) NOT NULL PRIMARY KEY,
    AccountNo int NOT NULL,
    PromoCode varchar(50) NOT NULL,
    ScheduleNo varchar(50) NOT NULL,
    Quantity int NOT NULL,
    BusSeat int NOT NULL,
    BusDateTime datetime NOT NULL,
    FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
    FOREIGN KEY (PromoCode) REFERENCES promo_code(PromoCode),
    FOREIGN KEY (ScheduleNo) REFERENCES bus_schedule(ScheduleNo),
    BookingTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

INSERT INTO `s900_database`.`account` (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `BirthDate`, `AccountRole`, `Nationality`) VALUES ('Lik Wei', 'Tan', 'likweitan@gmail.com', 'admin', 'male', '1998-04-08', 'admin', 'malaysian');


INSERT INTO `s900_database`.`booking` (`BookingNo`, `AccountNo`, `Quantity`, `BusNo`, `BusSeat`, `BusDateTime`, `PromoCode`) VALUES ('1', '1', '1', 'JJP2930', '23', '2020-04-17 10:00:00', '1');
