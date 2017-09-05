-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2017 a las 07:56:21
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scrum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterias`
--

CREATE TABLE `criterias` (
  `id_criteria` bigint(20) NOT NULL,
  `valuation` int(1) DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `fk_history_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historys`
--

CREATE TABLE `historys` (
  `id_history` bigint(20) NOT NULL,
  `objective` varchar(250) NOT NULL,
  `fk_sprint_id` bigint(20) NOT NULL,
  `fk_project_id` bigint(20) NOT NULL,
  `fk_phase_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phase_historys`
--

CREATE TABLE `phase_historys` (
  `id_phase` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phase_tasks`
--

CREATE TABLE `phase_tasks` (
  `id_phase` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioritys`
--

CREATE TABLE `prioritys` (
  `id_priority` bigint(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id_profile` char(1) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id_project` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `fk_teamwork_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `projects`
--
DELIMITER $$
CREATE TRIGGER `trigger1` BEFORE INSERT ON `projects` FOR EACH ROW BEGIN
DECLARE m_user_team_id integer;
INSERT INTO teamworks VALUES ();
 SET @m_user_team_id := (SELECT LAST_INSERT_ID());
 SET NEW.fk_teamwork_id = @m_user_team_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id_rol` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sprints`
--

CREATE TABLE `sprints` (
  `id_sprint` bigint(20) NOT NULL,
  `description` varchar(250) NOT NULL,
  `initial_date` date NOT NULL,
  `final_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id_state` char(1) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id_task` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `initial_date` date NOT NULL,
  `attachedFile` blob,
  `commentary` varchar(250) NOT NULL,
  `fk_user_team_id` bigint(20) NOT NULL,
  `fk_phase_id` bigint(20) NOT NULL,
  `fk_priority_id` bigint(20) NOT NULL,
  `fk_history_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teamworks`
--

CREATE TABLE `teamworks` (
  `id_teamwork` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fk_state_id` char(1) NOT NULL DEFAULT '0',
  `fk_profile_id` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_teams`
--

CREATE TABLE `user_teams` (
  `id_user_team` bigint(20) NOT NULL,
  `fk_user_id` bigint(20) NOT NULL,
  `fk_teamwork_id` bigint(20) DEFAULT NULL,
  `fk_rol_id` bigint(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id_criteria`),
  ADD KEY `fk_history_id` (`fk_history_id`);

--
-- Indices de la tabla `historys`
--
ALTER TABLE `historys`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `fk_sprint_id` (`fk_sprint_id`,`fk_project_id`,`fk_phase_id`),
  ADD KEY `fk_project_id` (`fk_project_id`),
  ADD KEY `fk_phase_id` (`fk_phase_id`);

--
-- Indices de la tabla `phase_historys`
--
ALTER TABLE `phase_historys`
  ADD PRIMARY KEY (`id_phase`);

--
-- Indices de la tabla `phase_tasks`
--
ALTER TABLE `phase_tasks`
  ADD PRIMARY KEY (`id_phase`);

--
-- Indices de la tabla `prioritys`
--
ALTER TABLE `prioritys`
  ADD PRIMARY KEY (`id_priority`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_teamwork_id` (`fk_teamwork_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sprints`
--
ALTER TABLE `sprints`
  ADD PRIMARY KEY (`id_sprint`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id_state`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `fk_user_team_id` (`fk_user_team_id`,`fk_phase_id`,`fk_priority_id`,`fk_history_id`),
  ADD KEY `fk_phase_id` (`fk_phase_id`),
  ADD KEY `fk_priority_id` (`fk_priority_id`),
  ADD KEY `fk_history_id` (`fk_history_id`);

--
-- Indices de la tabla `teamworks`
--
ALTER TABLE `teamworks`
  ADD PRIMARY KEY (`id_teamwork`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_state_id` (`fk_state_id`,`fk_profile_id`),
  ADD KEY `fk_profile_id` (`fk_profile_id`);

--
-- Indices de la tabla `user_teams`
--
ALTER TABLE `user_teams`
  ADD PRIMARY KEY (`id_user_team`),
  ADD KEY `fk_user_id` (`fk_user_id`,`fk_teamwork_id`,`fk_rol_id`),
  ADD KEY `fk_teamwork_id` (`fk_teamwork_id`),
  ADD KEY `fk_rol_id` (`fk_rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id_criteria` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historys`
--
ALTER TABLE `historys`
  MODIFY `id_history` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `phase_historys`
--
ALTER TABLE `phase_historys`
  MODIFY `id_phase` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `phase_tasks`
--
ALTER TABLE `phase_tasks`
  MODIFY `id_phase` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prioritys`
--
ALTER TABLE `prioritys`
  MODIFY `id_priority` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id_rol` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sprints`
--
ALTER TABLE `sprints`
  MODIFY `id_sprint` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `teamworks`
--
ALTER TABLE `teamworks`
  MODIFY `id_teamwork` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_teams`
--
ALTER TABLE `user_teams`
  MODIFY `id_user_team` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `criterias`
--
ALTER TABLE `criterias`
  ADD CONSTRAINT `criterias_ibfk_1` FOREIGN KEY (`fk_history_id`) REFERENCES `historys` (`id_history`);

--
-- Filtros para la tabla `historys`
--
ALTER TABLE `historys`
  ADD CONSTRAINT `historys_ibfk_1` FOREIGN KEY (`fk_project_id`) REFERENCES `projects` (`id_project`),
  ADD CONSTRAINT `historys_ibfk_2` FOREIGN KEY (`fk_phase_id`) REFERENCES `phase_historys` (`id_phase`),
  ADD CONSTRAINT `historys_ibfk_3` FOREIGN KEY (`fk_sprint_id`) REFERENCES `sprints` (`id_sprint`);

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`fk_teamwork_id`) REFERENCES `teamworks` (`id_teamwork`);

--
-- Filtros para la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`fk_user_team_id`) REFERENCES `user_teams` (`id_user_team`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`fk_phase_id`) REFERENCES `phase_tasks` (`id_phase`),
  ADD CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`fk_priority_id`) REFERENCES `prioritys` (`id_priority`),
  ADD CONSTRAINT `tasks_ibfk_4` FOREIGN KEY (`fk_history_id`) REFERENCES `historys` (`id_history`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_profile_id`) REFERENCES `profiles` (`id_profile`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fk_state_id`) REFERENCES `states` (`id_state`);

--
-- Filtros para la tabla `user_teams`
--
ALTER TABLE `user_teams`
  ADD CONSTRAINT `user_teams_ibfk_1` FOREIGN KEY (`fk_teamwork_id`) REFERENCES `teamworks` (`id_teamwork`),
  ADD CONSTRAINT `user_teams_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `user_teams_ibfk_3` FOREIGN KEY (`fk_rol_id`) REFERENCES `rols` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
