CREATE TABLE IF NOT EXISTS `users` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`firstname` varchar(50) NOT NULL,
	`lastname` varchar(50) NOT NULL,
	`password` varchar(255) NOT NULL,
	`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`id_roles` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `blogs` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`title` varchar(50) NOT NULL,
	`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`id_users` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `messages` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`text` varchar(255) NOT NULL,
	`created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`id_users` int NOT NULL,
	`id_blogs` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `roles` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk6` FOREIGN KEY (`id_roles`) REFERENCES `roles`(`id`);
ALTER TABLE `blogs` ADD CONSTRAINT `blogs_fk3` FOREIGN KEY (`id_users`) REFERENCES `users`(`id`);
ALTER TABLE `messages` ADD CONSTRAINT `messages_fk3` FOREIGN KEY (`id_users`) REFERENCES `users`(`id`);

ALTER TABLE `messages` ADD CONSTRAINT `messages_fk4` FOREIGN KEY (`id_blogs`) REFERENCES `blogs`(`id`);
