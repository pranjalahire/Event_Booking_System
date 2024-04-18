

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `mobile_no` varchar(15) NOT NULL,
 PRIMARY KEY (`id`)
); 

CREATE TABLE `events` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `event_name` varchar(255) NOT NULL,
 `event_date` date NOT NULL,
 `event_location` varchar(255) NOT NULL,
 `available_seats` int(11) NOT NULL,
 `event_fees` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
);

CREATE TABLE `bookings` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `u_id` int(11) NOT NULL,
 `e_id` int(11) NOT NULL,
 `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 KEY `u_id` (`u_id`),
 KEY `e_id` (`e_id`),
 CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
 CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `events` (`id`)
);

CREATE TABLE `admins` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `admin_name` varchar(255) NOT NULL,
 `admin_password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
);

