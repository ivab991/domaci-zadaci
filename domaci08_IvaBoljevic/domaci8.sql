CREATE TABLE `domaci8`.`cars` (
	`id` INT NOT NULL AUTO_INCREMENT, 
	`manufacturer` VARCHAR(255) NOT NULL,
	`model` VARCHAR(255) NOT NULL,
	`transmission` ENUM('automatic','manual') NOT NULL,
	`engine_cubic` DECIMAL NOT NULL,
	`fuel_type` ENUM('dizel','benzin') NOT NULL,
	`horse_power` INT NOT NULL, 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `cars` (`id`, `manufacturer`, `model`, `transmission`, `engine_cubic`, `fuel_type`, `horse_power`) VALUES
(1, 'Audi', 'A8', 'automatic', '1.9', 'benzin', '220'), 
(2, 'BMW', 'X3', 'automatic', '1.9', 'benzin', '250'), 
(3, 'Seat', 'Leone', 'manual', '1.9', 'dizel', '110'), 
(4, 'Volkswagen', 'Golf 6', 'manual', '1.6', 'benzin', '130'),
(5, 'Citroen', 'C4', 'manual', '1.6', 'benzin', '150'), 
(6, 'Volkswagen', 'Passat', 'automatic', '2.2', 'benzin', '300'), 
(7, 'Volkswagen', 'Polo', 'manual', '1.6', 'dizel', '150'), 
(8, 'Opel', 'Corsa', 'manual', '1.2', 'benzin', '120'), 
(9, 'Peugeot', '408', 'automatic', '2.2', 'benzin', '350'), 
(10, 'Renault', 'Megane', 'manual', '1.9', 'benzin', '150')