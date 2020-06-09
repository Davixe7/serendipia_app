INSERT INTO `owners` (`id`, `created_at`, `updated_at`, `name`, `email`, `dni`) VALUES
(1, NULL, NULL, 'Jose Maria Jaramillo', NULL, NULL),
(2, NULL, NULL, 'Ernesto Michelsen', NULL, NULL),
(3, NULL, NULL, 'Mariana Sarmiento', NULL, NULL),
(4, NULL, NULL, 'Camila Melendez', NULL, NULL),
(5, NULL, NULL, 'Maria Jose Jaimes', NULL, NULL),
(6, NULL, NULL, 'Ingryd Quillamba', NULL, NULL),
(7, NULL, NULL, 'Carlos Melendez', NULL, NULL),
(8, NULL, NULL, 'Paola Paez', NULL, NULL),
(9, NULL, NULL, 'Oscar Melendez', NULL, NULL);


INSERT INTO `types` (`id`, `created_at`, `updated_at`, `built_area`, `private_area`, `free_height`) VALUES
(1, NULL, NULL, 18.18, 15.55, 2.50),
(2, NULL, NULL, 16.62, 14.63, 2.50),
(3, NULL, NULL, 16.64, 14.57, 2.50),
(4, NULL, NULL, 18.40, 16.34, 2.50),
(5, NULL, NULL, 18.50, 16.56, 2.50),
(6, NULL, NULL, 18.15, 16.24, 2.50),
(7, NULL, NULL, 18.65, 16.20, 2.50),
(8, NULL, NULL, 19.84, 17.41, 2.50),
(9, NULL, NULL, 19.28, 17.60, 2.50),
(10, NULL, NULL, 19.35, 17.42, 2.50),
(11, NULL, NULL, 17.09, 15.18, 2.50),
(12, NULL, NULL, 16.90, 15.25, 2.50),
(13, NULL, NULL, 17.07, 15.27, 2.50),
(14, NULL, NULL, 17.65, 15.06, 2.50);

INSERT INTO `apartments` (`id`, `created_at`, `updated_at`, `available`, `number`, `floor`, `type_id`, `apt_value`, `finance_value`, `initial_quota`, `monthly_quota`, `instalment`, `release_date`, `owner_id`) VALUES
(1, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 201, 2, 1, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(2, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 202, 2, 2, 148000000, 96200000, 35.0, 1672000, 25, '2022-09-01', NULL),
(3, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 203, 2, 3, 148000000, 96200000, 35.0, 1672000, 25, '2022-09-01', NULL),
(4, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 204, 2, 4, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(5, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 205, 2, 5, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(6, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 206, 2, 6, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(7, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 207, 2, 7, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(8, '2020-05-31 06:04:17', '2020-05-31 06:04:17', 1, 208, 2, 8, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(9, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 209, 2, 9, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(10, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 210, 2, 10, 148000000, 88800000, 40.0, 1968000, 25, '2022-09-01', NULL),
(11, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 211, 2, 11, 148000000, 103600000, 30.0, 1376000, 25, '2022-09-01', NULL),
(12, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 212, 2, 12, 148000000, 103600000, 30.0, 1376000, 25, '2022-09-01', NULL),
(13, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 213, 2, 13, 148000000, 103600000, 30.0, 1376000, 25, '2022-09-01', NULL),
(14, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 214, 2, 14, 148000000, 103600000, 30.0, 1376000, 25, '2022-09-01', NULL),
(15, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 301, 3, 1, 148000000, 85100000, 99.9, 2116000, 25, '2022-09-01', 1),
(16, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 302, 3, 2, 148000000, 92500000, 37.5, 1820000, 25, '2022-09-01', 1),
(17, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 303, 3, 3, 148000000, 92500000, 37.5, 1820000, 25, '2022-09-01', 1),
(18, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 304, 3, 4, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', 1),
(19, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 305, 3, 5, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', NULL),
(20, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 306, 3, 6, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', NULL),
(21, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 307, 3, 7, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', NULL),
(22, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 308, 3, 8, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', 2),
(23, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 309, 3, 9, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', 2),
(24, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 310, 3, 10, 148000000, 85100000, 42.5, 2116000, 25, '2022-09-01', 3),
(25, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 311, 3, 11, 148000000, 99900000, 32.5, 1524000, 25, '2022-09-01', NULL),
(26, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 312, 3, 12, 148000000, 99900000, 32.5, 1524000, 25, '2022-09-01', 4),
(27, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 313, 3, 13, 148000000, 99900000, 32.5, 1524000, 25, '2022-09-01', 4),
(28, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 314, 3, 14, 148000000, 99900000, 32.5, 1524000, 25, '2022-09-01', NULL),
(29, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 0, 401, 4, 1, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', 3),
(30, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 402, 4, 2, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(31, '2020-05-31 06:04:18', '2020-05-31 06:04:18', 1, 403, 4, 3, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(32, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 404, 4, 4, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(33, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 405, 4, 5, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(34, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 0, 406, 4, 6, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', 5),
(35, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 407, 4, 7, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(36, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 408, 4, 8, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(37, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 409, 4, 9, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(38, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 410, 4, 10, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(39, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 411, 4, 11, 157000000, 102050000, 35.0, 1605357, 28, '2023-01-01', NULL),
(40, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 412, 4, 12, 157000000, 102050000, 35.0, 1605357, 28, '2023-01-01', NULL),
(41, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 413, 4, 13, 157000000, 102050000, 35.0, 1605357, 28, '2023-01-01', NULL),
(42, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 414, 4, 14, 157000000, 102050000, 35.0, 1605357, 28, '2023-01-01', NULL),
(43, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 501, 5, 1, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(44, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 502, 5, 2, 157000000, 90275000, 42.5, 2025893, 28, '2023-01-01', NULL),
(45, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 503, 5, 3, 157000000, 90275000, 42.5, 2025893, 28, '2023-01-01', NULL),
(46, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 504, 5, 4, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(47, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 0, 505, 5, 5, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', 6),
(48, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 0, 506, 5, 6, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', 6),
(49, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 507, 5, 7, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(50, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 508, 5, 8, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(51, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 509, 5, 9, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(52, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 510, 5, 10, 157000000, 82425000, 47.5, 2306250, 28, '2023-01-01', NULL),
(53, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 511, 5, 11, 157000000, 98125000, 37.5, 1745536, 28, '2023-01-01', NULL),
(54, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 512, 5, 12, 157000000, 98125000, 47.5, 1745536, 28, '2023-01-01', NULL),
(55, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 513, 5, 13, 157000000, 98125000, 47.5, 1745536, 28, '2023-01-01', NULL),
(56, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 514, 5, 14, 157000000, 98125000, 47.5, 1745536, 28, '2023-01-01', NULL),
(57, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 601, 6, 1, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(58, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 602, 6, 2, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(59, '2020-05-31 06:04:19', '2020-05-31 06:04:19', 1, 603, 6, 3, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(60, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 604, 6, 4, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(61, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 605, 6, 5, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(62, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 606, 6, 6, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(63, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 607, 6, 7, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(64, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 0, 608, 6, 8, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', 7),
(65, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 0, 609, 6, 9, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', 8),
(66, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 610, 6, 10, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(67, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 611, 6, 11, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(68, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 612, 6, 12, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(69, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 613, 6, 13, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(70, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 614, 6, 14, 157000000, 94200000, 40.0, 1885714, 28, '2023-01-01', NULL),
(71, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 701, 7, 1, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(72, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 0, 702, 7, 2, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', 9),
(73, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 703, 7, 3, 157000000, 78500000, 50.0, 2446429, 28, '2023-01-01', NULL),
(74, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 704, 7, 4, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(75, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 705, 7, 5, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(76, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 706, 7, 6, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(77, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 707, 7, 7, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(78, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 708, 7, 8, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(79, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 709, 7, 9, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(80, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 710, 7, 10, 157000000, 70650000, 55.0, 2726786, 28, '2023-01-01', NULL),
(81, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 711, 7, 11, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(82, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 712, 7, 12, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(83, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 713, 7, 13, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL),
(84, '2020-05-31 06:04:20', '2020-05-31 06:04:20', 1, 714, 7, 14, 157000000, 86350000, 45.0, 2166071, 28, '2023-01-01', NULL);