CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `emri` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `confirm_password` varchar(255) NOT NULL,
    `is_admin` varchar(255)
    )

    CREATE TABLE `moto`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `moto_name` varchar(255) NOT NULL,
    `moto_desc` varchar(255) NOT NULL,
    `moto_quality` varchar(255) NOT NULL,
    `moto_rating` int(255) NOT NULL,
    `moto_image` varchar(255) NOT NULL
    )

    
    CREATE TABLE `bookings`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` varchar(255) NOT NULL,
    `moto_id` varchar(255) NOT NULL,
    `nr_tickets` varchar(255) NOT NULL,
    `date` varchar(255) NOT NULL,
    `is_approved` varchar(255) NOT NULL,
    `time` varchar(255)
    )

