USE s900_database;
CREATE TABLE account
(
	AccountNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Email varchar(50) NOT NULL,
    Phone varchar(50) NOT NULL,
    Password varchar(50) NOT NULL,
	Gender varchar(50) NOT NULL,
	BirthDate date NOT NULL,
	AccountRole varchar(50) NOT NULL DEFAULT 'User',
	Country varchar(50) NOT NULL DEFAULT 'Malaysia',
    PhoneNumber varchar(50) NOT NULL,
    AccountTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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

INSERT INTO `s900_database`.`bus` (`BusNo`, `BusCompany`, `BusCapacity`) VALUES ('JQL2938', 'KKKL', '40');

INSERT INTO `s900_database`.`bus_schedule` (`ScheduleNo`, `BusNo`, `ScheduleDepart`, `ScheduleArrive`, `ScheduleStartTime`, `ScheduleDuration`, `TicketPrice`) VALUES ('1', 'JQL2938', 'Johor Bahru', 'Kuala Lumpur', '10:00', '240', '38');

INSERT INTO `s900_database`.`promo_code` (`PromoCode`, `PromoCodeDescription`, `PromoCodeEndTimestamp`, `PromoCodeStartTimestamp`) VALUES ('NEW2KL', 'New to KL!', '2020-04-30 00:00:00', '2020-04-16 00:00:00');

INSERT INTO `s900_database`.`booking` (`BookingNo`, `AccountNo`, `PromoCode`, `ScheduleNo`, `Quantity`, `BusSeat`, `BusDateTime`) VALUES ('133123', '1', 'NEW2KL', '1', '1', '2', '2020-04-27 10:00:00');
