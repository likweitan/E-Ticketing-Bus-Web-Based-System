CREATE DATABASE IF NOT EXISTS s900_database;
USE s900_database;
CREATE TABLE account (
  AccountNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  FirstName varchar(50) NOT NULL,
  LastName varchar(50) NOT NULL,
  Email varchar(50) NOT NULL,
  Password varchar(50) NOT NULL,
  Gender varchar(50) NOT NULL,
  BirthDate date NOT NULL,
  AccountRole varchar(50) NOT NULL DEFAULT 'User',
  Nationality varchar(50) NOT NULL DEFAULT 'Malaysia',
  PhoneNumber varchar(50) NOT NULL,
  AccountTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);
CREATE TABLE payment (
  PaymentNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  PaymentType varchar(50) NOT NULL,
  CardName varchar(50) NOT NULL,
  CardNumber varchar(50) NOT NULL,
  CardExpiration varchar(50) NOT NULL,
  CVV int NOT NULL,
  AccountNo int NOT NULL,
  FOREIGN KEY (AccountNo) REFERENCES account(AccountNo)
);
CREATE TABLE bus (
  BusNo varchar(50) NOT NULL PRIMARY KEY,
  BusCompany varchar(50) NOT NULL,
  BusCapacity int NOT NULL
);
CREATE TABLE bus_schedule (
  ScheduleNo varchar(50) NOT NULL PRIMARY KEY,
  BusNo varchar(50) NOT NULL,
  ScheduleDepart varchar(50) NOT NULL,
  ScheduleArrive varchar(50) NOT NULL,
  ScheduleStartTime TIME NOT NULL,
  ScheduleDuration int(50) NOT NULL,
  TicketPrice float(10) NOT NULL,
  FOREIGN KEY (BusNo) REFERENCES bus(BusNo)
);
CREATE TABLE promo_code (
  PromoCode varchar(50) NOT NULL PRIMARY KEY,
  ScheduleNo varchar(50) NOT NULL,
  PromoCodeDescription varchar(50) NOT NULL,
  PromoPercentage int NOT NULL,
  PromoCodeEndTimestamp date NOT NULL,
  FOREIGN KEY (ScheduleNo) REFERENCES bus_schedule(ScheduleNo),
  PromoCodeStartTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);
CREATE TABLE booking (
  BookingNo varchar(50) NOT NULL PRIMARY KEY,
  AccountNo int NOT NULL,
  PromoCode varchar(50) NULL,
  ScheduleNo varchar(50) NOT NULL,
  Quantity int NOT NULL DEFAULT 1,
  BusSeat int NOT NULL,
  BusDateTime datetime NOT NULL,
  PaymentNo int NOT NULL,
  BookingStatus varchar(50) NOT NULL DEFAULT 'Completed',
  FOREIGN KEY (AccountNo) REFERENCES account(AccountNo),
  FOREIGN KEY (PromoCode) REFERENCES promo_code(PromoCode),
  FOREIGN KEY (ScheduleNo) REFERENCES bus_schedule(ScheduleNo),
  FOREIGN KEY (PaymentNo) REFERENCES payment(PaymentNo),
  BookingTimestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);
INSERT INTO `s900_database`.`account` (
    `FirstName`,
    `LastName`,
    `Email`,
    `PhoneNumber`,
    `Password`,
    `Gender`,
    `BirthDate`,
    `AccountRole`,
    `Nationality`
  )
VALUES
  (
    'Lik Wei',
    'Tan',
    'likweitan@gmail.com',
    '012-2939932',
    'admin',
    'male',
    '1998-04-08',
    'admin',
    'malaysian'
  );
INSERT INTO `s900_database`.`bus` (`BusNo`, `BusCompany`, `BusCapacity`)
VALUES
  ('JQL2938', 'KKKL', '30');
INSERT INTO `s900_database`.`bus` (`BusNo`, `BusCompany`, `BusCapacity`)
VALUES
  ('JMA', 'JJJB', '30');
INSERT INTO `s900_database`.`bus_schedule` (
    `ScheduleNo`,
    `BusNo`,
    `ScheduleDepart`,
    `ScheduleArrive`,
    `ScheduleStartTime`,
    `ScheduleDuration`,
    `TicketPrice`
  )
VALUES
  (
    '1',
    'JQL2938',
    'Johor Bahru',
    'Kuala Lumpur',
    '10:00',
    '240',
    '38'
  );
INSERT INTO `s900_database`.`promo_code` (
    `PromoCode`,
    `ScheduleNo`,
    `PromoCodeDescription`,
    `PromoPercentage`,
    `PromoCodeEndTimestamp`,
    `PromoCodeStartTimestamp`
  )
VALUES
  (
    'NEW2KL',
    '1',
    'New to KL!',
    '10',
    '2020-04-30 00:00:00',
    '2020-04-16 00:00:00'
  );
  INSERT INTO `s900_database`.`promo_code` (
    `PromoCode`,
    `ScheduleNo`,
    `PromoCodeDescription`,
    `PromoPercentage`,
    `PromoCodeEndTimestamp`,
    `PromoCodeStartTimestamp`
  )
VALUES
  (
    'none',
    '1',
    'none',
    '0',
    '2020-12-31 00:00:00',
    '2020-04-16 00:00:00'
  );
INSERT INTO `s900_database`.`payment` (
    `PaymentNo`,
    `AccountNo`,
    `PaymentType`,
    `CardName`,
    `CardNumber`,
    `CardExpiration`,
    `CVV`
  )
VALUES
  (
    '1',
    '1',
    'Debit',
    'TAN LIK WEI',
    '2132324534321234',
    '122020',
    '232'
  );
INSERT INTO `s900_database`.`booking` (
    `BookingNo`,
    `ScheduleNo`,
    `AccountNo`,
    `Quantity`,
    `BusSeat`,
    `BusDateTime`,
    `PromoCode`,
    `PaymentNo`
  )
VALUES
  (
    '1',
    '1',
    '1',
    '1',
    '23',
    '2020-04-17 10:00:00',
    'NEW2KL',
    '1'
  );
INSERT INTO `s900_database`.`booking` (
    `BookingNo`,
    `ScheduleNo`,
    `AccountNo`,
    `Quantity`,
    `BusSeat`,
    `BusDateTime`,
    `PromoCode`,
    `PaymentNo`
  )
VALUES
  (
    '2364523',
    '1',
    '1',
    '1',
    '24',
    '2020-04-22 10:00:00',
    'NEW2KL',
    '1'
  );